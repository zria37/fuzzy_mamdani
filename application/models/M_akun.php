<?php
class M_akun extends CI_Model{
 
  function index() {
        $this->datatables->select('id, username, password');
        $this->datatables->from('akun');
        $this->datatables->add_column('view', 
        '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-kode="$1" 
        data-nama="$2" data-harga="$3" data-kategori="$4">Edit</a>  
        <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kode="$1">Hapus</a>',
        
        'id, username, password');
        return $this->datatables->generate();
  }
}