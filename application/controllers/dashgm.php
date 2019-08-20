<?php

class Dashgm extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_petugas', 'm_grafikchart'));
        $this->load->library(array('form_validation', 'template4', 'template3', 'template'));
        //$this->load->helper(array('masalalu_helper'));

        if (!$this->session->userdata('level')) {
            redirect('web');
        }
    }

    function index()
    {
        //$data['title']="Home";
        $kategori = array('LN', 'BL', 'VC', 'MP', 'FT', 'IT', 'OE', 'LA', 'LI', 'IA');
        $kategori2 = array('Balinusra', 'Jabar', 'Jabotabek dan Banten', 'Jateng dan DIY', 'Jatim', 'Kalimantan', 'Kantor Pusat', 'Puma', 'Sulawesi', 'Sumbagsel', 'Sumbagteng', 'Sumbagut');

        for ($i = 0; $i <= count($kategori) - 1; $i++) {

            $row = $this->m_grafikchart->getkat1($kategori[$i])->result_array();
            $data[] = count($row);

            $row2 = $this->m_grafikchart->getkat2($kategori[$i]);
            $sum = 0;
            foreach ($row2->result_array() as $row3) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum += intval($row3['harga']) / 1000000;
            }

            $data2[] = $sum;
        }

        for ($a = 0; $a <= count($kategori2) - 1; $a++) {
            $row3 = $this->m_grafikchart->getkat3($kategori2[$a], "LN")->result_array();
            $data3[] = count($row3);
            $row4 = $this->m_grafikchart->getkat3($kategori2[$a], "BL")->result_array();
            $data4[] = count($row4);
            $row5 = $this->m_grafikchart->getkat3($kategori2[$a], "VC")->result_array();
            $data5[] = count($row5);
            $row6 = $this->m_grafikchart->getkat3($kategori2[$a], "MP")->result_array();
            $data6[] = count($row6);
            $row7 = $this->m_grafikchart->getkat3($kategori2[$a], "FT")->result_array();
            $data7[] = count($row7);
            $row8 = $this->m_grafikchart->getkat3($kategori2[$a], "IT")->result_array();
            $data8[] = count($row8);
            $row9 = $this->m_grafikchart->getkat3($kategori2[$a], "OE")->result_array();
            $data9[] = count($row9);
            $row10 = $this->m_grafikchart->getkat3($kategori2[$a], "LA")->result_array();
            $data10[] = count($row10);
            $row11 = $this->m_grafikchart->getkat3($kategori2[$a], "LI")->result_array();
            $data11[] = count($row11);
            $row12 = $this->m_grafikchart->getkat3($kategori2[$a], "IA")->result_array();
            $data12[] = count($row12);


            $row21 = $this->m_grafikchart->getkat4($kategori2[$a], "LN");
            $sum21 = 0;
            foreach ($row21->result_array() as $row22) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum21 += intval($row22['harga']) / 1000000;
            }

            $data21[] = $sum21;

            $row23 = $this->m_grafikchart->getkat4($kategori2[$a], "BL");
            $sum22 = 0;
            foreach ($row23->result_array() as $row24) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum22 += intval($row24['harga']) / 1000000;
            }

            $data22[] = $sum22;

            $row25 = $this->m_grafikchart->getkat4($kategori2[$a], "VC");
            $sum23 = 0;
            foreach ($row25->result_array() as $row26) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum23 += intval($row26['harga']) / 1000000;
            }

            $data23[] = $sum23;

            $row27 = $this->m_grafikchart->getkat4($kategori2[$a], "MP");
            $sum24 = 0;
            foreach ($row27->result_array() as $row28) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum24 += intval($row28['harga']) / 1000000;
            }

            $data24[] = $sum24;

            $row29 = $this->m_grafikchart->getkat4($kategori2[$a], "FT");
            $sum25 = 0;
            foreach ($row29->result_array() as $row30) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum25 += intval($row30['harga']) / 1000000;
            }

            $data25[] = $sum25;

            $row31 = $this->m_grafikchart->getkat4($kategori2[$a], "IT");
            $sum26 = 0;
            foreach ($row31->result_array() as $row32) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum26 += intval($row32['harga']) / 1000000;
            }

            $data26[] = $sum26;

            $row33 = $this->m_grafikchart->getkat4($kategori2[$a], "OE");
            $sum27 = 0;
            foreach ($row33->result_array() as $row34) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum27 += intval($row34['harga']) / 1000000;
            }

            $data27[] = $sum27;

            $row35 = $this->m_grafikchart->getkat4($kategori2[$a], "LA");
            $sum28 = 0;
            foreach ($row35->result_array() as $row36) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum28 += intval($row36['harga']) / 1000000;
            }

            $data28[] = $sum28;

            $row37 = $this->m_grafikchart->getkat4($kategori2[$a], "LI");
            $sum29 = 0;
            foreach ($row37->result_array() as $row38) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum29 += intval($row38['harga']) / 1000000;
            }

            $data29[] = $sum29;

            $row39 = $this->m_grafikchart->getkat4($kategori2[$a], "IA");
            $sum30 = 0;
            foreach ($row39->result_array() as $row40) {
                //$nominal[] = $row3['harga']; //can it be float also?
                $sum30 += intval($row40['harga']) / 1000000;
            }

            $data30[] = $sum30;


        }
        //print_r( $data);
        // Update by imam 12 April 2019
        // End of update
        $this->template4->display('v_grafikchartkat1', array('data' => $data, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5
        , 'data6' => $data6, 'data7' => $data7, 'data8' => $data8, 'data9' => $data9, 'data10' => $data10, 'data11' => $data11, 'data12' => $data12, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27, 'data28' => $data28, 'data29' => $data29, 'data30' => $data30));
    }


    function _set_rules()
    {
        $this->form_validation->set_rules('user', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>", "</div>");
    }

    function logout()
    {
        activity_log('session_destroy', '0', 'Logout User '.$this->session->userdata('user'));
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('level');
        redirect('web');
    }

}