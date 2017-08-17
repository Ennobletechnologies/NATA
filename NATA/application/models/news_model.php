<?php

class news_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_topstories() {
        //$this->db->order_by('news_id','desc');
        $query = $this->db->query("SELECT * FROM `news` ORDER BY `news`.`news_id`  DESC limit 1 , 3");
        return $query->result_array();
    }

    function get_top_one_news() {
        $query = $this->db->query("SELECT * FROM `news` ORDER BY `news`.`news_id`DESC limit 1");
        return $query->result_array();
    }

    function get_topstories_limit() {
        $this->db->order_by('news_id', 'desc');
		$this->db->limit(4);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_news_tvcover() {
        //$this->db->order_by('news_id','desc');
        $query = $this->db->query("SELECT * FROM `news` WHERE cat='tvcoverage' ORDER BY `news`.`news_id`DESC limit 3");
        return $query->result_array();
    }

    function get_news_latest_videos() {
        //$this->db->order_by('news_id','desc');
        $query = $this->db->query("SELECT * FROM `news` WHERE cat='latest_videos' ORDER BY `news`.`news_id`DESC limit 2");
        return $query->result_array();
    }

    function get_news_admin() {
        $this->db->order_by('news_id', 'desc');
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_topstories_limit_four() {
        $this->db->order_by('news_id', 'desc');
        $query = $this->db->get('news', 4);
        return $query->result_array();
    }

    function edit_topstory($id) {
        $this->db->where('news_id', $id);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_region($name) {
        $this->db->where('region', $name);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function user_level_news() {
        $user_id = $this->session->userdata("user_id");
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    /* function insert_news() {
      $this->load->database();
      $title = mysql_real_escape_string($_POST['news_title']);
      $desc = mysql_real_escape_string($_POST['news_description']);
      $cat = mysql_real_escape_string($_POST['cat']);
      $region = $_POST['region'];
      $config['upload_path'] = 'public/dummy/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = '9000';
      $config['encrypt_name'] = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('newspic');
      $file_data = $this->upload->data();
      $config['image_library'] = 'gd2';
      $config['source_image'] = $file_data['full_path'];
      $config['new_image'] = 'public/dummy/thumb/';
      $config['create_thumb'] = TRUE;
      $config['maintain_ratio'] = false;
      $config['thumb_marker'] = '';
      $config['width'] = 90;
      $config['height'] = 45;
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
      $fname = $file_data['file_name'];
      $arr = $_POST['multi'];
      foreach ($arr as $key => $value) {
      if ($value == 1) {
      copy("public/dummy/" . $fname, "public/News/" . $fname);
      copy("public/dummy/thumb/" . $fname, "public/News/thumb/" . $fname);
      $data = '';
      $data['news_id'] = '';
      $data['news_title'] = $title;
      $data['news_desc'] = $desc;
      $data['news_img'] = $fname;
      $data['cat'] = $cat;
      $data['user_id'] = $this->session->userdata('user_id');
      $data['region'] = $region;
      $data['updated_date'] = date('Y-m-d H:i:s');
      $this->db->insert('news', $data);
      }
      if ($value == 6) {
      copy("public/dummy/" . $fname, "public/banner/" . $fname);
      copy("public/dummy/thumb/" . $fname, "public/banner/thumb/" . $fname);
      $data = '';
      $data['banner_id'] = '';
      $data['banner_image'] = $fname;
      $data['banner_title'] = $title;
      $data['banner_desc'] = $desc;
      $data['updated_date'] = date('Y-m-d H:i:s');
      $this->db->insert('banner', $data);
      }
      if ($value == 8) {
      copy("public/dummy/" . $fname, "public/Events/" . $fname);
      copy("public/dummy/thumb/" . $fname, "public/Events/thumb/" . $fname);
      $data = '';
      $data['events_id'] = '';
      $data['events_title'] = $title;
      $data['events_desc'] = $desc;
      $data['events_img'] = $fname;
      $data['updated_date'] = date('Y-m-d H:i:s');
      $this->db->insert('events', $data);
      }
      if ($value == 12) {
      copy("public/dummy/" . $fname, "public/services/" . $fname);
      copy("public/dummy/thumb/" . $fname, "public/services/thumb/" . $fname);
      $data = '';
      $data['services_id'] = '';
      $data['services_title'] = $title;
      $data['services_desc'] = $desc;
      $data['services_img'] = $fname;
      $data['updated_date'] = date('Y-m-d H:i:s');

      $this->db->insert('services', $data);
      }
      }
      @unlink("public/dummy/" . $fname);
      @unlink("public/dummy/thumb/" . $fname);
      return true;
      } */

    function insert_news() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['news_title']);
        $desc = mysql_real_escape_string($_POST['news_description']);
        $region = $_POST['region'];
        $config['upload_path'] = 'public/News/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('newspic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/News/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 90;
        $config['height'] = 45;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        if (!empty($fname)) {
            $data['news_img'] = $fname;
        }
        $data['news_id'] = '';
        $data['news_title'] = $title;
        $data['news_desc'] = $desc;
        $data['user_id'] = $this->session->userdata('user_id');
        $data['region'] = $region;
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->insert('news', $data);

        return true;
    }

    function updatenews() {
        $name = $_FILES['newspic']['name'];
        $id = $this->input->post('newsid');
        if ($name != "") {
            $sql = "select * from `news` where `news_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/News/" . $row['news_img'];
            $path1 = "public/News/thumb/" . $row['news_img'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/News/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('newspic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/News/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 167;
            $config['height'] = 168;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['news_img'] = $file_data['file_name'];
            $data1['news_img'] = $file_data['file_name'];
        }
        $data['news_title'] = $this->input->post('news_title');
        $data['news_desc'] = $this->input->post('news_description');
        $data['cat'] = $this->input->post('cat');
        if ($this->db->update('news', $data, array('news_id' => $id))) {
            $data1['news_title'] = $this->input->post('news_title');
            $data1['news_desc'] = $this->input->post('news_description');
            $data1['cat'] = $this->input->post('cat');
            $data1['updated_date'] = date('Y-m-d H:i:s');
            $this->db->update('news', $data1, array('news_id' => $id));
            $_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_news($id) {
        $sql = "select * from `news` where `news_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/News/" . $row['news_img'];
        $path1 = "public/News/thumb/" . $row['news_img'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('news');
        $this->db->where('news_id', $id);
        $query = $this->db->delete();
        $_SESSION['delete_topstory'] = true;
        return 0;
    }

    function newsinfo($id) {
        $this->db->where('news_id', $id);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    //president msg adding
    function insert_msg() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['title']);
        $message = mysql_real_escape_string($_POST['message']);
        $config['upload_path'] = 'public/dummy/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/dummy/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 157;
        $config['height'] = 203;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];


        copy("public/dummy/" . $fname, "public/News/" . $fname);
        copy("public/dummy/thumb/" . $fname, "public/News/thumb/" . $fname);
        $data = '';
        $data['id'] = '';
        $data['title'] = $title;
        $data['message'] = $message;
        $data['image'] = $fname;
        $data['updated_date'] = date('Y-m-d H:i:s');

        $this->db->insert('president_msg', $data);

        @unlink("public/dummy/" . $fname);
        @unlink("public/dummy/thumb/" . $fname);
        return true;
    }

    //president msg adding end
    function get_message() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('president_msg');
        return $query->result_array();
    }

    function edit_msg($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('president_msg');
        return $query->result_array();
    }

    function update_msg() {
        $name = $_FILES['image']['name'];
        if (!empty($_FILES['cont_image']['name'])) {
            $cont_image = $_FILES['cont_image']['name'];
        }
        $id = $this->input->post('msgid');
        if ($name != "") {
            $sql = "select * from `president_msg` where `id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/News/" . $row['image'];
            $path1 = "public/News/thumb/" . $row['image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/News/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/News/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 149;
            $config['height'] = 195;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['image'] = $file_data['file_name'];
            $data1['image'] = $file_data['file_name'];
        }
        $data['title'] = $this->input->post('title');
        $data['message'] = $this->input->post('message');
        if ($this->db->update('president_msg', $data, array('id' => $id))) {
            $data1['title'] = $this->input->post('title');
            $data1['message'] = $this->input->post('message');
            $data1['updated_date'] = date('Y-m-d H:i:s');
            $this->db->update('president_msg', $data1, array('id' => $id));
            return true;
        }
    }

    //msg update part ends
    function addBanner($image, $banner_title, $banner_desc, $album_id) {
        $data['banner_image'] = $image;
        $data['banner_title'] = $banner_title;
        $data['banner_desc'] = $banner_desc;
        $data['album_id'] = $album_id;
        $this->db->insert('banner', $data);
        return true;
    }

    function getBanners() {
        $this->db->order_by('banner_id', 'DESC');
        $query = $this->db->get('banner');
        return $query->result_array();
    }

    function getAdminBanners($per_pg, $offset) {
        $this->db->order_by('banner_id', 'desc');
        $query = $this->db->get('banner', $per_pg, $offset);
        return $query->result_array();
    }

    //function getAlbum() {
    //$data = array();
    //$sql = "select DISTINCT a.name,a.id,a.album_image,b.album_id from album a, banner b where a.id = b.album_id";
    //$query = $this->db->query($sql);
    //return $query->result_array();
    /* $this->db->order_by('id','desc');
      //  $query=$this->db->get('album');
      return $query->result_array(); */
    //}
    public function message_count2() {
        return $this->db->count_all('album');
    }

    function getAlbum($per_pg, $offset) {
        $data = array();
        $query = $this->db->query("select DISTINCT a.name,a.id,a.album_image,b.album_id from album a, banner b where a.id = b.album_id LIMIT " . $per_pg, $offset);
        return $query->result_array();
    }

    function getAlbumID() {
        $sql = "SELECT banner_image FROM banner where album_id=1 ORDER BY banner_id asc limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function deleteBanner($id) {
        $data['banner_id'] = $id;
        $this->db->where('banner_id', $id);
        $this->db->from('banner');
        $this->db->delete();
        return true;
    }

    function get_policies() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('policies');
        return $query->result_array();
    }

    function insert_policies() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['title']);
        $desc = mysql_real_escape_string($_POST['description']);
        $data = '';
        $data['id'] = '';
        $data['title'] = $title;
        $data['p_desc'] = $desc;
        //$data['news_img']=$fname;
        //$data['user_id']=$this->session->userdata('user_id');
        //$data['region']=$region;
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->insert('policies', $data);
        return true;
    }

    function edit_policies($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('policies');
        return $query->result_array();
    }

    function updatepolicies() {
        $id = $this->input->post('newsid');
        $data['title'] = $this->input->post('title');
        $data['p_desc'] = $this->input->post('description');
        $data1['updated_date'] = date('Y-m-d H:i:s');
        $this->db->update('policies', $data, array('id' => $id));
        return true;
    }

    function delete_policies($id) {
        $this->db->select();
        $this->db->from('policies');
        $this->db->where('id', $id);
        $query = $this->db->delete();
        return 0;
    }

    //sponsers
    function addSponsers($image) {
        $data['spn_image'] = $image;
        $data['file_path'] = 'public/sponsers/';
        $this->db->insert('sponsers', $data);
        return true;
    }

    function getSponsers() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('sponsers');
        return $query->result_array();
    }

    function getoneSponser() {
        $this->db->order_by('id', 'desc');
        $this->db->limit('1');
        $query = $this->db->get('sponsers');
        return $query->result_array();
    }

    function deleteSponsers($id) {
        $data['id'] = $id;
        $this->db->where('id', $id);
        $this->db->from('sponsers');
        $this->db->delete();
        return true;
    }

//sponsers ends here
//videos part
    function get_latest_videos() {
        $this->db->order_by('videos_id', 'desc');
        $this->db->limit('1');
        $query = $this->db->get('videos');
        return $query->result_array();
    }

    function get_side_videos() {
        $this->db->order_by('videos_id', 'desc');
        $this->db->limit('2');
        $query = $this->db->get('videos');
        return $query->result_array();
    }

    function get_videos() {
        $this->db->order_by('videos_id', 'desc');
        $query = $this->db->get('videos');
        return $query->result_array();
    }

    function get_related_videos() {
        $query = $this->db->query("SELECT * FROM `videos` ORDER BY `videos`.`videos_id`  DESC limit 1 , 3");
        return $query->result_array();
    }

    public function message_count1() {
        return $this->db->count_all('videos');
    }

    function getvideos($per_pg, $offset) {
        $this->db->order_by('videos_id', 'DESC');
        $query = $this->db->get('videos', $per_pg, $offset);
        //$query = $this->db->query("SELECT * FROM `videos` ORDER BY `videos`.`videos_id`  DESC limit 1, 3");
        return $query->result_array();
    }

    //youtube thumb
    function youtube_thumbnail_url($url) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            // URL is Not valid
            return false;
        }
        $domain = parse_url($url, PHP_URL_HOST);
        if ($domain == 'www.youtube.com' OR $domain == 'youtube.com') { // http://www.youtube.com/watch?v=t7rtVX0bcj8&feature=topvideos_film
            if ($querystring = parse_url($url, PHP_URL_QUERY)) {
                parse_str($querystring);
                if (!empty($v))
                    return "http://img.youtube.com/vi/$v/0.jpg";
                else
                    return false;
            } else
                return false;
        }
        elseif ($domain == 'youtu.be') { // something like http://youtu.be/t7rtVX0bcj8
            $v = str_replace('/', '', parse_url($url, PHP_URL_PATH));
            return (empty($v)) ? false : "http://img.youtube.com/vi/$v/0.jpg";
        } else
            return false;
    }

    function insert_videos() {
        $url = $this->input->post('videopic');
        $fname = $this->youtube_thumbnail_url($url); //full url
        $this->load->database();
        $title = mysql_real_escape_string($_POST['title']);
        $desc = mysql_real_escape_string($_POST['description']);
        $data = '';
        $data['videos_id'] = '';
        $data['videos_title'] = $title;
        $data['videos_desc'] = $desc;
        $data['videos_img'] = $fname;
        $data['user_id'] = $this->session->userdata('user_id');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->insert('videos', $data);
        return true;
    }

    function edit_videos($id) {
        $this->db->where('videos_id', $id);
        $query = $this->db->get('videos');
        return $query->result_array();
    }

    /* function updateVideos() {
      //$name=$_FILES['videospic']['name'];
      $id = $this->input->post('videosid');
      $data['videos_title'] = $this->input->post('title');
      $data['videos_desc'] = $this->input->post('description');
      $url = $this->input->post('videospic');
      $data['videos_img'] = $this->youtube_thumbnail_url($url);
      //$data['videos_img']=$this->input->post('videospic');
      $this->db->update('videos', $data, array('videos_id' => $id));
      return true;
      } */

    function updateVideos() {
        //$name=$_FILES['videospic']['name'];
        $id = $this->input->post('videosid');
        $data['videos_title'] = $this->input->post('title');
        $data['videos_desc'] = $this->input->post('description');
        if ($this->input->post('videospic')) {
            $url = $this->input->post('videospic');
            $data['videos_img'] = $this->youtube_thumbnail_url($url);
        }
        //$data['videos_img']=$this->input->post('videospic');
        $this->db->update('videos', $data, array('videos_id' => $id));
        return true;
    }

    function delete_videos($id) {
        /* $sql="select * from `videos` where `videos_id`=$id";
          $query=$this->db->query($sql);
          $row=$query->row_array();
          $path="public/videos/".$row['videos_img'];
          $path1="public/videos/thumb/".$row['videos_img'];
          @unlink($path);
          @unlink($path1); */
        $this->db->select();
        $this->db->from('videos');
        $this->db->where('videos_id', $id);
        $query = $this->db->delete();
        return 0;
    }

    function fullvideo($id) {
        $this->db->where('videos_id', $id);
        $query = $this->db->get('videos');
        return $query->result_array();
    }

//video part ends
//newsletters
    function get_newsletters() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news_letter');
        return $query->result_array();
    }

//news letters ends
//album
    function get_album() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('album');
        return $query->result_array();
    }

    function insert_album() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['name']);
        $config['upload_path'] = 'public/albumpic/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('albumpic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/albumpic/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 400;
        $config['height'] = 266;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data = '';
        $data['id'] = '';
        $data['name'] = $title;
        $data['album_image'] = $fname;
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->insert('album', $data);
        return true;
    }

    function fullgal($id) {
        $this->db->where('album_id', $id);
        $query = $this->db->get('banner');
        return $query->result_array();
    }

    function edit_album($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('album');
        return $query->result_array();
    }

    function update_alb() {
        $name = $_FILES['albumpic']['name'];
        $id = $this->input->post('alb_id');
        if ($name != "") {
            $sql = "select * from `album` where `id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/albumpic/" . $row['album_image'];
            $path1 = "public/albumpic/thumb/" . $row['album_image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/albumpic/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('albumpic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/albumpic/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 400;
            $config['height'] = 266;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['album_image'] = $file_data['file_name'];
            $data1['album_image'] = $file_data['file_name'];
        }
        $data['name'] = $this->input->post('name');
        if ($this->db->update('album', $data, array('id' => $id))) {
            $data1['name'] = $this->input->post('name');
            $data1['updated_date'] = date('Y-m-d H:i:s');
            $this->db->update('album', $data1, array('id' => $id));
            return true;
        }
    }

    function delete_album($id) {
        $sql = "select * from `album` where `id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/albumpic/" . $row['album_image'];
        $path1 = "public/albumpic/thumb/" . $row['album_image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('album');
        $this->db->where('id', $id);
        $query = $this->db->delete();
        return 0;
    }

//album ends
//multi images
    function multi_img($id, $name) {
        $data['id'] = $id;
        $data['name'] = $name;
        $this->db->insert('testtable', $data);
        return true;
    }

//multi images ends
//slider
    function getSlider() {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('images');
        return $query->result_array();
    }

    function delete_slider($id) {
        $sql = "select * from `images` where `id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "uploads/" . $row['filename'];
        @unlink($path);
        $this->db->select();
        $this->db->from('images');
        $this->db->where('id', $id);
        $query = $this->db->delete();
        return 0;
    }

    //slider ends
    public function get_all($per_pg, $offset) {
        $this->db->order_by('banner_id', 'desc');
        $query = $this->db->get('banner', $per_pg, $offset);
        return $query->result();
    }

    public function message_count() {
        return $this->db->count_all('banner');
    }

    /* public function cont_insert()
      {
      $title=$this->input->post('title');
      $description=$this->input->post('description');
      $data['page_id']='';
      $data['page_title']=$title;
      $data['page_content']=$description;
      $data['published_on']='250215';
      $this->db->insert('contact',$data);
      return true;
      } */

    //Even cal image
    public function cont_insert() {
        $title = $this->input->post('page_title');
        $description = $this->input->post('page_content');
        $pdate = $this->input->post('published_on');
        $data['page_id'] = '';
        $data['page_title'] = $title;
        $data['page_content'] = $description;
        $data['published_on'] = $pdate;
        $this->db->insert('contact', $data);
        return true;
    }

    public function get_all_pages($id = FALSE) {
        if ($id === FALSE) {
            //$this->db->limit(2);
            $this->db->order_by('page_id', 'page_content');
            $query = $this->db->get('contact');
            return $query->result_array();
        }
        $query = $this->db->get_where('contact', array('page_id' => $id));
        return $query->row_array();
    }

    public function record_count() {
        return $this->db->count_all('contact');
    }

    public function fetch_pages($limit, $start) {
        $this->db->limit($limit, $start);
        //$this->db->order_by('id','desc');
        $query = $this->db->get("contact");
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function update_contact($id) {
        $title = $this->input->post('page_title');
        $description = $this->input->post('page_content');
        $pdate = $this->input->post('published_on');
        $data['page_title'] = $title;
        $data['page_content'] = $description;
        $data['published_on'] = $pdate;
        $this->db->where('page_id', $id);
        $this->db->update('contact', $data);
    }

    public function delete_contact($id) {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('page_id', $id);
        $this->db->delete('contact');
    }

    function updateImg() {
        $event = $this->input->post('event');
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'public/event/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '900000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/event/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $fname = $file_data['file_name'];
            $data['img_id'] = '';
            $data['imagename'] = $fname;
            $data['idevent'] = $this->input->post('idevent');
            $this->db->insert('event_image', $data);
        }
        if ($event) {
            $id = $this->input->post('idevent');
            $data1['event'] = $this->input->post('event');
            $data1['event_title'] = $this->input->post('event_title');
            $this->db->update('event_detail', $data1, array('idevent' => $id));
        }
        return true;
    }

    function get_calEvents() {
        $query = $this->db->query("SELECT * FROM `event_detail` ORDER BY `event_detail`.`idevent`  DESC limit 8");
        return $query->result_array();
    }

    /*function addTelugu() {
        $data['telugu_id'] = '';
        $data['body'] = $this->input->post('newspapers');
        $this->db->insert('telugu', $data);
        return true;
    }

    function getTelugu() {
        $this->db->where('telugu_id', '1');
        $query = $this->db->get('telugu');
        return $query->result_array();
    }

    function updateTelugu() {
        $data['body'] = $this->input->post('newspapers');
        $this->db->update('telugu', $data, array('telugu_id' => '1'));
        return true;
    }*/

    /* new functions */

    function get_newsletter() {
        $query = $this->db->query("SELECT * FROM `news_letter`ORDER BY `news_letter`.`id`  DESC");
        return $query->result_array();
    }

    function get_tvcoverage() {
        $query = $this->db->query("SELECT * FROM `tv_coverage`ORDER BY `tv_coverage`.`id`  DESC");
        return $query->result_array();
    }
    function get_onetvcoverage(){
     $query = $this->db->query("SELECT * FROM `tv_coverage`ORDER BY `tv_coverage`.`id`  DESC LIMIT 8");
        return $query->result_array();
     }

    function get_printcoverage() {
        $query = $this->db->query("SELECT * FROM `print_coverage`ORDER BY `print_coverage`.`id`  DESC");
        return $query->result_array();
    }

    function edit_nl($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news_letter');
        return $query->result_array();
    }

    function updateNewsLetter() {
        $name = $_FILES['newspic']['name'];
        $id = $this->input->post('newsid');
        if ($name != "") {
            $sql = "select * from `news_letter` where `id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/newsletter/" . $row['image'];
            $path1 = "public/newsletter/thumb/" . $row['image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/newsletter/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('newspic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/newsletter/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 167;
            $config['height'] = 168;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['image'] = $file_data['file_name'];
        }
        $data['title'] = $this->input->post('news_title');
        $data['nl_desc'] = $this->input->post('news_description');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->update('news_letter', $data, array('id' => $id));
        return true;
    }

    function delete_nl($id) {
        $sql = "select * from `news_letter` where `id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/newsletter/" . $row['image'];
        $path1 = "public/newsletter/thumb/" . $row['image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('news_letter');
        $this->db->where('id', $id);
        $query = $this->db->delete();
        $_SESSION['delete_newsletter'] = true;
        return 0;
    }

    function edit_tvcoverage($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tv_coverage');
        return $query->result_array();
    }

    function updatetvcoverage() {
        $name = $_FILES['newspic']['name'];
        $id = $this->input->post('newsid');
        if ($name != "") {
            $sql = "select * from `tv_coverage` where `id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/tvcoverage/" . $row['image'];
            $path1 = "public/tvcoverage/thumb/" . $row['image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/tvcoverage/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('newspic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/tvcoverage/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 167;
            $config['height'] = 168;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['image'] = $file_data['file_name'];
        }
        $data['title'] = $this->input->post('news_title');
        $data['t_desc'] = $this->input->post('news_description');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->update('tv_coverage', $data, array('id' => $id));
        return true;
    }

    function delete_tvcoverage($id) {
        $sql = "select * from `tv_coverage` where `id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/tvcoverage/" . $row['image'];
        $path1 = "public/tvcoverage/thumb/" . $row['image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('tv_coverage');
        $this->db->where('id', $id);
        $query = $this->db->delete();
        $_SESSION['delete_tv_coverage'] = true;
        return 0;
    }

    function edit_printcoverage($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('print_coverage');
        return $query->result_array();
    }

    function updateprintcoverage() {
        $name = $_FILES['newspic']['name'];
        $id = $this->input->post('newsid');
        if ($name != "") {
            $sql = "select * from `print_coverage` where `id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/printcoverage/" . $row['image'];
            $path1 = "public/printcoverage/thumb/" . $row['image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/printcoverage/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('newspic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/printcoverage/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 167;
            $config['height'] = 168;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['image'] = $file_data['file_name'];
        }
        $data['title'] = $this->input->post('news_title');
        $data['p_desc'] = $this->input->post('news_description');
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->update('print_coverage', $data, array('id' => $id));
        return true;
    }

    function delete_pc($id) {
        $sql = "select * from `print_coverage` where `id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/printcoverage/" . $row['image'];
        $path1 = "public/printcoverage/thumb/" . $row['image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('print_coverage');
        $this->db->where('id', $id);
        $query = $this->db->delete();
        $_SESSION['delete_newsletter'] = true;
        return 0;
    }

    /** 11032015 added */
    function insert_nl() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['news_title']);
        $desc = mysql_real_escape_string($_POST['news_description']);
        $region = $_POST['region'];
        $config['upload_path'] = 'public/newsletter/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('newspic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/newsletter/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 90;
        $config['height'] = 45;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data['id'] = '';
        $data['title'] = $title;
        $data['nl_desc'] = $desc;
        $data['updated_date'] = date('Y-m-d H:i:s');
        if ($fname) {
            $data['image'] = $fname;
        }
        $data['is_active'] = '1';
        $this->db->insert('news_letter', $data);
        return true;
    }

    function insert_tv() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['news_title']);
        $desc = mysql_real_escape_string($_POST['news_description']);
        $region = $_POST['region'];
        $config['upload_path'] = 'public/tvcoverage/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('newspic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/tvcoverage/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 90;
        $config['height'] = 45;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data['id'] = '';
        $data['title'] = $title;
        $data['t_desc'] = $desc;
        $data['updated_date'] = date('Y-m-d H:i:s');
        if ($fname) {
            $data['image'] = $fname;
        }
        $data['is_active'] = '1';
        $this->db->insert('tv_coverage', $data);
        return true;
    }

    function insert_print() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['news_title']);
        $desc = mysql_real_escape_string($_POST['news_description']);
        $region = $_POST['region'];
        $config['upload_path'] = 'public/printcoverage/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('newspic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/printcoverage/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 90;
        $config['height'] = 45;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data['id'] = '';
        $data['title'] = $title;
        $data['p_desc'] = $desc;
        $data['updated_date'] = date('Y-m-d H:i:s');
        if ($fname) {
            $data['image'] = $fname;
        }
        $data['is_active'] = '1';
        $this->db->insert('print_coverage', $data);
        return true;
    }

    //11-03-2015 front page design 
    function get_front_newsletters($per_pg, $offset) {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news_letter', $per_pg, $offset);
        return $query->result_array();
    }

    public function nl_count() {
        return $this->db->count_all('news_letter');
    }

    function nl_readmore($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('news_letter');
        return $query->result_array();
    }

    function get_side_latest_videos() {
        $query = $this->db->query("SELECT * FROM `videos` ORDER BY `videos`.`videos_id`DESC limit 2");
        return $query->result_array();
    }

    /* 12-03-2015 added */

    function get_front_tvcoverage($per_pg, $offset) {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('tv_coverage', $per_pg, $offset);
        return $query->result_array();
    }

    public function tv_count() {
        return $this->db->count_all('tv_coverage');
    }

    function tv_readmore($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tv_coverage');
        return $query->result_array();
    }

    public function print_count() {
        return $this->db->count_all('print_coverage');
    }

    function get_front_printcoverage($per_pg, $offset) {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('print_coverage', $per_pg, $offset);
        return $query->result_array();
    }

    function print_readmore($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('print_coverage');
        return $query->result_array();
    }

}