<?php 
class Nasabah_model extends CI_model{
    // fungsi untuk menampilkan seluruh data siswa
    public function getAllNasabah()
    {
        return $this->db->get('tbl_simpan')->result_array();
    }

    // fungsi untuk menambah data siswa
    public function addNasabah()
    {
        $data = [
            'id' => $this->input->post('id', true),
            'nama_nasabah' => $this->input->post('nama_nasabah', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp', true),
            'tgl_simpan' => $this->input->post('tgl_simpan', true),
            'jumlah' => $this->input->post('jumlah', true),
        ];
        $this->db->insert('tbl_simpan', $data);
    }

    // fungsi untuk menampilkan data siswa berdasarkan id
    public function getNasabahById($id)
    {
        return $this->db->get_where('tbl_simpan',['id' => $id])->row_array();
    }
// fungsi untuk edit data nasabah
    public function updatenasabah($id)
{
    $data = [
        'id' => $this->input->post('id', true),
        'nama_nasabah' => $this->input->post('nama_nasabah', true),
        'alamat' => $this->input->post('alamat', true),
        'no_hp' => $this->input->post('no_hp', true),
        'tgl_simpan' => $this->input->post('tgl_simpan', true),
        'jumlah' => $this->input->post('jumlah', true),
    ];
    $this->db->where('id', $id);
    $this->db->update('tbl_simpan', $data);
}
// menghapus
public function delNasabah($id)
{
    $this->db->where('id', $id);
    $this->db->delete('tbl_simpan');
}

}
?>