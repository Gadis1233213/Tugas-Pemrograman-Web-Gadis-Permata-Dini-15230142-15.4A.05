<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Peminjaman extends Model
{
    protected $table = 'tbl_peminjaman';
    protected $tableTmp = 'tbl_temp_peminjaman';
    protected $tableDetail = 'tbl_detail_peminjaman';

    public function getDataPeminjaman($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        if ($where !== false) {
            $builder->where($where);
        }
        $builder->orderBy('no_peminjaman','DESC');
        return $builder->get();
    }

    public function getDataPeminjamanJoin($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('tbl_anggota','tbl_anggota.id_anggota = tbl_peminjaman.id_anggota','LEFT');
        $builder->join('tbl_admin','tbl_admin.id_admin = tbl_peminjaman.id_admin','LEFT');
        if ($where !== false) {
            $builder->where($where);
        }
        $builder->orderBy('tbl_peminjaman.no_peminjaman','DESC');
        return $builder->get();
    }

    public function getDataTemp($where = false)
    {
        $builder = $this->db->table($this->tableTmp);
        $builder->select('*');
        if ($where !== false) {
            $builder->where($where);
        }
        return $builder->get();
    }

    public function getDataTempJoin($where = false)
    {
        $builder = $this->db->table($this->tableTmp);
        $builder->select('*');
        $builder->join('tbl_buku','tbl_buku.id_buku = tbl_temp_peminjaman.id_buku','LEFT');
        if ($where !== false) {
            $builder->where($where);
        }
        return $builder->get();
    }

    public function saveDataPeminjaman($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function saveDataTemp($data)
    {
        $builder = $this->db->table($this->tableTmp);
        return $builder->insert($data);
    }

    public function saveDataDetail($data)
    {
        $builder = $this->db->table($this->tableDetail);
        return $builder->insert($data);
    }

    public function updateDataPeminjaman($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function updateDataDetail($data, $where)
    {
        $builder = $this->db->table($this->tableDetail);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataTemp($where)
    {
        $builder = $this->db->table($this->tableTmp);
        return $builder->delete($where);
    }
    
}
?>