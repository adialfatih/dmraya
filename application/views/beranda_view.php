<?php
        $ar = array(
            '01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
        ); 
        $karAktif = $this->db->query("SELECT nrp,nama,status_io FROM data_karyawan WHERE status_io='1'")->num_rows();                
        $karResign = $this->db->query("SELECT nrp,nama,status_io FROM data_karyawan WHERE status_io!='1'")->num_rows();
		$msn = $this->data_model->get_record('data_mesin');
		$konek=0;
		foreach($msn->result() as $val){
			$IP = $val->ip_mesin;
			$Key = $val->comkey;
			$mc = $val->nama_mesin;
			$Connect = fsockopen($IP, "80", $errno, $errstr, 1);
			if($Connect){
				$konek+=1;
			}
		}
		$total_mesin = $msn->num_rows();
		$ctt="null";
		if($total_mesin != $konek){
			$not_konek = $total_mesin - $konek;
			$ctt = "Terdapat <strong style='color:red;'>".$not_konek." mesin</strong> yang tidak terhubung";
		}       
?>
		<div class="main-container">
			<div class="pd-ltr-20">
				<?php if($akses != "user"){ ?>
				<div class="title pb-20">
					<h2 class="h3 mb-0">System Overview</h2>
				</div>

				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<a href="<?=base_url('data-mesin');?>">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?=$konek;?></div>
									<div class="font-14 text-secondary weight-500">
										Mesin Terhubung
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy bi bi-fingerprint"></i>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<a href="<?=base_url('data/karyawan');?>">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?=$karAktif;?></div>
									<div class="font-14 text-secondary weight-500">
										Karyawan Aktif
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ffffff">
										<span class="icon-copy bi bi-people"></span>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<a href="<?=base_url('data/resign');?>">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?=$karResign;?></div>
									<div class="font-14 text-secondary weight-500">
										Karyawan Resign
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy bi bi-people"></span>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">0</div>
									<div class="font-14 text-secondary weight-500">Notifikasi</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy bi bi-app-indicator"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="card-box pd-20 height-100-p mb-30">
					<div class="row align-items-center">
						<div class="col-md-4">
							<img src="<?=base_url('assets/');?>vendors/images/banner-img.png" alt="" />
						</div>
						<div class="col-md-8">
							<h4 class="font-20 weight-500 mb-10 text-capitalize">
								Welcome Back <?=$sess_hak=='Manager' ? 'Manager':'';?>
								<div class="weight-600 font-30 text-blue"><?=$sess_nama;?></div>
							</h4>
							<p class="font-18 max-width-600">
								Human Resources Management System PT. <strong>Rindang Jati Spinning</strong>
							</p>
						</div>
					</div>
					<?php if($akses != "user"){ ?>
					<div style="width:100%;background-color:#d4d4d4;padding:10px 20px;margin-top:20px;border-radius:10px;display:flex;flex-direction:column;font-size:14px;">
					<strong>Catatan Penting :</strong>
					<?php if($qr_lembur >0 ){
						echo "<p style='margin-top:10px;'>- Terdapat <strong style='color:red;'>".$qr_lembur." </strong>pengajuan lembur yang belum di verifikasi HRD.</p>";
					}
					if($ctt!="null"){
						echo "<p>- ".$ctt."</p>";
					}
					if($qr_lembur==0 && $ctt=="null" && $qr_cuti<1 ){
						echo "<p>- Tidak ada notifikasi</p>";
					}
					if($qr_cuti>0){
						echo "<p>- Terdapat <strong style='color:red;'>".$qr_cuti." </strong>pengajuan cuti yang belum di verifikasi HRD.</p>";
					}
					?>
					</div>
					<?php } ?>
				</div>
				
				
				<div class="footer-wrap pd-20 mb-20 card-box">
					&copy; <?=date('Y');?> : PT. Rindang Jati Spinning - Versi 1.0
				</div>
			</div>
		</div>