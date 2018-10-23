class Admin_model extends CI_Model {

        public $admin;
        public $artikel;
        public $kategori;
        public $barang;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->admin    = $_POST['admin']; // please read the below note
                $this->artikel  = $_POST['artikel'];
                $this->kategori = $_POST['kategori'];
                $this->barang = $_POST['barang'];

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->admin    = $_POST['admin'];
                $this->artikel  = $_POST['artikel'];
                $this->kategori = $_POST['kategori'];
                $this->barang = $_POST['barang'];

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}