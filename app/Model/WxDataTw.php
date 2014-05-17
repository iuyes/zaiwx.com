<?php
App::uses('AppModel', 'Model');
/**
 * TUser Model
 *
 */
class WxDataTw extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'wcdata_tw';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Id';
	
	public $validate = array(
	    'FTitle' => array(
			'rule' => "notEmpty",
			'message' => "必须填写",
			'required' => true
	    ),
		'FType' => array(
			'rule' => "notEmpty",
			'message' => "必须填写",
			'required' => true
	    ),
		'FUrl' => array(
			'rule' => "notEmpty",
			'message' => "必须填写",
			'required' => true
	    )
	);
	
	public $type = array('0' => "单图文", '1' => "多图文");
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author apple
	 **/
	function saveData($data, $uid, $id)
	{	
		if (!$this->id) $this->set('FCreatedate', date('Y-m-d H:i:s'));
		$this->set('Id', $this->id ? $this->id : String::uuid());
		$this->set('FUpdatedate', date('Y-m-d H:i:s'));
		$this->set('FWebchat', $id);
		$this->data['WxDataTw']['FTwj'] = serialize($this->data['WxDataTw']['FTwj']);
 		// print_r($this->data);exit;
		$query = $this->save($this->data);
		if ($query) return $this->id;
	}
	
	/**
	 * Overridden paginate method - group by week, away_team_id and home_team_id
	 */
	public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) 
	{
	    $recursive = -1;
		$data = $this->find(
	        'all',
	        compact('conditions', 'fields', 'order', 'limit', 'page', 'recursive', 'group')
	    );
		foreach ($data as $key => &$vals)
		{	
			$vals['WxDataTw']['C_FType'] = $this->type[$vals['WxDataTw']['FType']];
		}
	    return $data;
	}
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author apple
	 **/
	function getDataList($id = NULL, $cid = NULL, $ids = NULL) {	
		if ($cid != NULL) {
			$conditions = $id == NULL ? array('Id' => $cid) : array('Id' => $cid, 'FWebchat' => $id);
			$data = $this->find('first', array('conditions' => $conditions, 'recursive' => 0));
			if (is_array($data)) {
				$data['WxDataTw']['FTwj'] = unserialize($data['WxDataTw']['FTwj']);
				$data['WxDataTw']['FPreTwj'] = implode(',', $data['WxDataTw']['FTwj']);
			}
		} else {
			$conditions = array('FWebchat' => $id);
			if ($ids) $conditions['Id'] = $ids;
			$data['datalist'] = $this->find('all', array('conditions' => $conditions, 'order' => "FCreatedate desc", 'recursive' => 0));
			$data['count'] = $this->find('count', array('conditions' => $conditions, 'recursive' => 0));
			foreach ($data['datalist'] as $key => &$vals) {	
				$vals['WxDataTw']['C_FType'] = $this->type[$vals['WxDataTw']['FType']];
				$vals['WxDataTw']['FTwj'] = unserialize($vals['WxDataTw']['FTwj']);
			}
			// echo $this->getLastQuery();
			// echo '<pre>';print_r($data);exit;
		}
		return $data;
	}
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author apple
	 **/
	function checkId($id, $cid)
	{
		$conditions = array('FWebchat' => $id, 'Id' => $cid);
		$count = $this->find('count', array('conditions' => $conditions, 'recursive' => 0));
		if ($count) return TRUE;
	}
	
	/**
	 * 获取图文信息
	 *
	 * @return void
	 * @author apple
	 **/
	function getMsg($twId, $type = 'arr')
	{
		$twId = is_array($twId) ? reset($twId) : $twId;
		$data = $this->find('first', array('conditions' => array('Id' => $twId), 'recursive' => 0));
		$WX_twj = isset($data['WxDataTw']['FTwj']) ? unserialize($data['WxDataTw']['FTwj']) : FALSE;
		$WX_type = isset($data['WxDataTw']['FType']) ? $data['WxDataTw']['FType'] : 0;
		$returnArr['count'] = 1;
		$returnArr['items'][0] = array(
									'Title' => $data['WxDataTw']['FTitle'],
									'Description' => $data['WxDataTw']['FMemo'],
									'PicUrl' => Router::url($data['WxDataTw']['FUrl'], TRUE),
									'Url' => $data['WxDataTw']['FLink'] ? $data['WxDataTw']['FLink'] : $this->_getFTwjLink($data['WxDataTw']['Id'])
								);
		if ($WX_type == 1) {
			$twjData = $this->find('all', array('conditions' => array('Id' => $WX_twj), 'recursive' => 0));
			$itemsArr = array();
			foreach ($twjData as $key => $value) {
				$returnArr['items'][$key+1] = array(
									'Title' => $value['WxDataTw']['FTitle'],
									'Description' => $value['WxDataTw']['FMemo'],
									'PicUrl' => Router::url($value['WxDataTw']['FUrl'], TRUE),
									'Url' => $value['WxDataTw']['FLink'] ? $value['WxDataTw']['FLink'] : $this->_getFTwjLink($data['WxDataTw']['Id'])
								);
			}
			$returnArr['count'] += intval(count($twjData));
		}
		
		// Msg Output
		if ($type != 'arr') {
			$content = array();
			$content['data']['ArticleCount'] = $returnArr['count'];
			$content['data']['items'] = $returnArr['items'];
			$content['type'] = "news";
			$returnArr = $content;
		}
		return $returnArr;
	}
	
	/**
	 * 图文链接
	 *
	 * @return void
	 * @author apple
	 **/
	function _getFTwjLink($id)
	{
		return Router::url("/mob/tw/{$id}", TRUE);
	}
}
