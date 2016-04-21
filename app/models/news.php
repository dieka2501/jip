<?php
class news Extends Eloquent{
	protected $table = 'news';
	protected $primaryKey = "id_news";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_title($title){
		return DB::table($this->table)->where('news_title',$title)->first();
	}
	function get_page(){
		return DB::table($this->table)->orderBy('id_news',"DESC")->paginate(20);
	}
	function get_page_front(){
		return DB::table($this->table)->orderBy('id_news',"DESC")->where('news_status',1)->paginate(6);
	}
	function get_search($cari){
		return DB::table($this->table)->where('news_title','like','%'.$cari.'%')->orderBy('id_news',"DESC")->paginate(20);
	}
	function get_id($id){
		return news::find($id);
	}
	function edit($id,$data){
		return DB::table($this->table)->where('id_news',$id)->update($data);
	}
	function del($id){
		$news = news::find($id);
		return $news->delete();
	}
	function get_front(){
		return DB::table($this->table)->orderBy('id_news',"DESC")->where('news_status',1)->paginate(6);
	}
	function get_front_news(){
		return DB::table($this->table)->orderBy('id_news',"DESC")->paginate(9);
	}
	function get_last(){
		return news::orderBy('id_news','DESC')->first();
	}
	function get_last2(){
		return news::orderBy('id_news','DESC')->take(2)->where('news_status',1)->get();
	}
}