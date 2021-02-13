<?php
// error_reporting(0);
class Model_Print extends CI_model
{
    public function getjobyperiode($tanggal,$bulan,$tahun)
    {
        $like=$tahun."-".$bulan."-".$tanggal;
        if($like != "--"){
            if ($tanggal != "x" && $bulan=="x" && $tahun=="x") {
                $this->db->like("tanggal_surat", "-".$tanggal);
            }
            if ($tanggal == "x" && $bulan!="x" && $tahun=="x") {
                $this->db->like("tanggal_surat", "-".$bulan."-");
            }
            if ($tanggal == "x" && $bulan=="x" && $tahun!="x") {
                $this->db->like("tanggal_surat", $tahun."-");
            }
            if ($tanggal != "x" && $bulan=="x" && $tahun!="x") {
                $this->db->like("tanggal_surat", $tahun."-__-".$tanggal);
            }
            if ($tanggal == "x" && $bulan!="x" && $tahun!="x") {
                $this->db->like("tanggal_surat", $tahun."-".$bulan."-");
            }
            if ($tanggal != "x" && $bulan!="x" && $tahun=="x") {
                $this->db->like("tanggal_surat", "-".$bulan."-".$tanggal);
            }
            if ($tanggal != "x" && $bulan!="x" && $tahun!="x") {
                $this->db->like("tanggal_surat", $tahun."-".$bulan."-".$tanggal);
            }
        }
        $this->db->join("skb_customer", "skb_customer.customer_id = skb_job_order.customer_id", 'left');
        $this->db->join("skb_supir", "skb_supir.supir_id = skb_job_order.supir_id", 'left');
        $this->db->join("skb_mobil", "skb_mobil.mobil_no = skb_job_order.mobil_no", 'left');
        return $this->db->get('skb_job_order')->result_array();
        }
}