
	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
		<style type="text/css">
		.no-float{
			float: none;
			width: 125px;
			display: inline-block;
		}
		
		table input.span3, textarea.span3, table input.span2, textarea.span2{
			margin: 0;
		}
		input.span3, textarea.span3, input.span2, textarea.span2, input.span7{
			margin-left: 20px;
			margin-right: 20px;
		}
	</style>
    
<!--     1. ข้อมูลทั่วไปของกลุ่ม / องค์กร -->
  <fieldset>
		<legend>1. ข้อมูลทั่วไปของกลุ่ม / องค์กร</legend>    
    <form >
        <h3>1.1 ประเภทของกลุ่ม / องค์กร :</h3>
        <div class="clearfix">
					<label class="no-float">บริษัท</label>
					<input type="radio" checked="" name="Data[0]" value="บริษัท">
					<label class="no-float">มูลนิธิ</label>
					<input type="radio" checked="" name="Data[0]" value="มูลนิธิ">
					<label class="no-float">หน่วยงานสาธารณะประโยชน์ (NGO)</label>
					<input type="radio" checked="" name="Data[0]" value="หน่วยงานสาธารณะประโยชน์ (NGO)">
					<label class="no-float">หน่วยงานรัฐ</label>
					<input type="radio" checked="" name="Data[0]" value="หน่วยงานรัฐ">
					<label class="no-float">กลุ่มอาสาสมัคร</label>
					<input type="radio" checked="" name="Data[0]" value="กลุ่มอาสาสมัคร">
					<label class="no-float">อื่นๆ</label>
					<input type="radio" checked="" name="Data[0]" value="อื่นๆ">
				</div>
        
        <h3>1.2 ชื่อกลุ่ม / องค์กร</h3>
        <div class="clearfix">
				  <label >พื้นที่ตําบล</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[1]" size="30" type="text" value="<?php echo $Data[1]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
        <h3>1.3 ข้อมูลการติดต่อ</h3>
        <div class="clearfix">
				  <label >ชื่อผู้ติดต่อ / ประสานงาน</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[2]" size="30" type="text" value="<?php echo $Data[2]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				<div class="clearfix">
				  <label >Email</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[3]" size="30" type="text" value="<?php echo $Data[3]; ?>">
				  </div>
				</div><!-- /clearfix -->
				<div class="clearfix">
				  <label >เบอร์โทรศัพท์</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[4]" size="30" type="text" value="<?php echo $Data[4]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
        <h3>1.4 ทรัพยากรของกลุ่ม / องค์กร</h3>
        <div class="clearfix">
				  <label >เงินทุนสนับสนุน (บาท)</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[5]" size="30" type="text" value="<?php echo $Data[5]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				<div class="clearfix">
				<div class="input">
			    <ol class="inputs-list">
			      <li>
							<div class="clearfix">
								<h5>การสนับสนุนอื่นๆ (ที่ไม่ได้เป็นตัวเงิน)</h5>
						    <input class="xlarge"  name="Data[6]" size="30" type="text" value="<?php echo $Data[6]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[7]" size="30" type="text" value="<?php echo $Data[7]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[8]" size="30" type="text" value="<?php echo $Data[8]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[9]" size="30" type="text" value="<?php echo $Data[9]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[10]" size="30" type="text" value="<?php echo $Data[10]; ?>" >
					    </div>
						</li>
			    </ol>
			  </div>

      </fieldset>
      <br/><br/>
      
      
      
      
      <fieldset>
          <legend>2. ข้อมูลโครงการ</legend>
          <div class="clearfix">
					  <label >2.1 โครงการที่ 1</label>
					  <div class="input">
					    <input class="xlarge"  name="Data[11]" size="30" type="text" value="<?php echo $Data[11]; ?>" >
					  </div>
					</div><!-- /clearfix -->
          
					<h3>2.1.1 ประเด็น (สามารถเลือกได้มากกว่า 1 ข้อ)</h3>
					<div class="clearfix">
					  <label id="optionsCheckboxes">รายการ</label>
					  <div class="input">
					    <ul class="inputs-list">
					      <li>
					        <label>
					          <?php echo CHtml::activeCheckBox($model, 'filter0'); ?>
					          <span>การเกษตร</span>
					        </label>
					      </li>
					      <li>
					        <label>
					          <?php echo CHtml::activeCheckBox($model, 'filter1'); ?>
					          <span>การจัดการภัยพิบัติ</span>
					        </label>
					      </li>
					      <li>
					        <label>
                    <?php echo CHtml::activeCheckBox($model, 'filter2'); ?>
					          <span>เศรษฐกิจและการฟื้นฟูอาชีพ</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter3'); ?>
					          <span>การศึกษา</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter4'); ?>
					          <span>สิ่งแวดล้อม</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter5'); ?>
					          <span>อาหาร</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter6'); ?>
					          <span>สุขภาพ</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter7'); ?>
					          <span>ที่อยู่อาศัย</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter8'); ?>
					          <span>สาธารณสุขและน้ำสะอาด</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter9'); ?>
					          <span>ความเท่าเทียม สิทธิมนุษยชน ความยุติธรรม และประชาธิปไตย</span>
					        </label>
					      </li>
					      <li>
					        <label >
					          <?php echo CHtml::activeCheckBox($model, 'filter10'); ?>
					          <span>อื่นๆ (โปรดระบุ)</span>
									  <input class="xlarge"  name="Data[23]" size="30" type="text" value="<?php echo $Data[23]; ?>" >
					        </label>
					      </li>
					    </ul>
					  </div>
					</div><!-- /clearfix -->
					
					<h3>2.1.2 พื้นที่เป้าหมาย</h3>
					<div class="clearfix">
						<?php $this->widget('ext.location.LocationWidget', array('model' => $model, 'attribute' => 'locations', 'multiple' => true, 'index' => 0)); ?>
            
					</div>
					
					<h3>2.1.3 ลักษณะกิจกรรม</h3>
					<div class="clearfix">
					  <div class="input">
					    <input class="xlarge"  name="Data[27]" size="30" type="text" value="<?php echo $Data[27]; ?>" >
					  </div>
					</div><!-- /clearfix -->
				
				
				<h3>2.1.4 เป้าหมายโครงการ</h3>
				<table class="bordered-table">
		        <thead>
		          <tr>
		            <th>กิจกรรม</th>
		            <th>เป้าหมาย</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td><input class="span5" name="Data[28]" type="text" value="<?php echo $Data[28]; ?>" ></td>
		            <td><input class="span5" name="Data[29]" type="text" value="<?php echo $Data[29]; ?>" ></td>
		          </tr>
		          <tr>
		            <td><input class="span5" name="Data[30]" type="text" value="<?php echo $Data[30]; ?>" ></td>
		            <td><input class="span5" name="Data[31]" type="text" value="<?php echo $Data[31]; ?>" ></td>
		          </tr>
		          <tr>
		            <td><input class="span5" name="Data[32]" type="text" value="<?php echo $Data[32]; ?>" ></td>
		            <td><input class="span5" name="Data[33]" type="text" value="<?php echo $Data[33]; ?>" ></td>
		          </tr>
		          <tr>
		            <td><input class="span5" name="Data[34]" type="text" value="<?php echo $Data[34]; ?>" ></td>
		            <td><input class="span5" name="Data[35]" type="text" value="<?php echo $Data[35]; ?>" ></td>
		          </tr>
		          <tr>
		            <td><input class="span5" name="Data[36]" type="text" value="<?php echo $Data[36]; ?>" ></td>
		            <td><input class="span5" name="Data[37]" type="text" value="<?php echo $Data[37]; ?>" ></td>
		          </tr>
		        </tbody>
		      </table>
				
				<h3>2.1.5 กลุ่มเป้าหมาย / ผู้ได้ประโยชน์</h3>
				<div class="clearfix">
				  <label >กลุ่มเป้าหมาย / ผู้ได้ประโยชน</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[38]" size="30" type="text" value="<?php echo $Data[38]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				
				<h3>2.1.6 การดำเนินการ</h3>
				<div class="clearfix">
				  <div class="input">
				    <ul class="inputs-list">
				      <li>
				        <label>
				          <input type="checkbox" name="Data[39]" value="ดำเนินการเอง">
				          <span>ดำเนินการเอง</span>
				        </label>
				      </li>
				      <li>
				        <label>
				          <input type="checkbox" name="Data[40]" value="ดำเนินการผ่านภาคีหรือเครือข่าย (โปรดระบุ)">
				          <span>ดำเนินการผ่านภาคีหรือเครือข่าย (โปรดระบุ)</span>
				          <input class="xlarge"  name="Data[41]" size="30" type="text" value="<?php echo $Data[41]; ?>" >
				        </label>
				      </li>
			      </ul>
		      </div>
				</div><!-- /clearfix -->
				
				
				<h3>2.1.7 พันธมิตร / ภาคีเครือข่าย</h3>
				<div class="clearfix">
				  <label >พันธมิตร / ภาคีเครือข่าย</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[42]" size="30" type="text" value="<?php echo $Data[42]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				
				<h3>2.1.8 วันเริ่มต้นโครงการ / กิจกรรม</h3>
				<div class="clearfix">
					<label class="no-float">วันที่</label>
					<input class="span2" name="Data[43]" type="text" placeholder="" value="<?php echo $Data[43]; ?>" >
					<label class="no-float">เดือน</label>
					<input class="span2" name="Data[44]" type="text" placeholder="" value="<?php echo $Data[44]; ?>" >
					<label class="no-float">ปี พ.ศ</label>
					<input class="span2" name="Data[45]" type="text" placeholder="" value="<?php echo $Data[45]; ?>" >
				</div>
				
				<h3>2.1.9 ระยะเวลาการทำโครงการ (เดืิอน)</h3>
				<div class="clearfix">
				  <label >ระยะเวลาการทำโครงการ (เดืิอน)</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[46]" size="30" type="text" value="<?php echo $Data[46]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				<h3>2.1.10 งบประมาณโครงการ (บาท)</h3>
				<div class="clearfix">
				  <label >งบประมาณโครงการ (บาท)</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[47]" size="30" type="text" value="<?php echo $Data[47]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				<h3>2.1.11 ชื่อผู้ประสานงานโครงการ</h3>
				<div class="clearfix">
				  <label >ชื่อผู้ประสานงานโครงการ</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[48]" size="30" type="text" value="<?php echo $Data[48]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				<h3>2.1.12 Email</h3>
				<div class="clearfix">
				  <label >Email</label>
				  <div class="input">
				    <input class="xlarge"  name="Data[49]" size="30" type="text" value="<?php echo $Data[49]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				<h3>2.1.13 เบอร์โทรศัพท์</h3>
				<div class="clearfix">
				  <label >เบอร์โทรศัพท์ </label>
				  <div class="input">
				    <input class="xlarge"  name="Data[50]" size="30" type="text" value="<?php echo $Data[50]; ?>" >
				  </div>
				</div><!-- /clearfix -->
				
				<h3>2.1.14 ลักษณะโครงการ</h3>
				<div class="clearfix">
				  <div class="input">
				    <ul class="inputs-list">
				      <li>
				        <label>
				          <input type="radio" checked="" name="Data[51]" value="เฉพาะหน้า (เร่งด่วน)">
				          <span>เฉพาะหน้า (เร่งด่วน)</span>
				        </label>
				      </li>
				      <li>
				        <label>
				          <input type="radio" checked="" name="Data[51]" value="ฟื้นฟูระยะสั้น">
				          <span>ฟื้นฟูระยะสั้น</span>
				        </label>
				      </li>
				      <li>
				        <label>
				          <input type="radio" checked="" name="Data[51]" value="ฟื้นฟูระยะยาว">
				          <span>ฟื้นฟูระยะยาว</span>
				        </label>
				      </li>
			      </ul>
		      </div>
				</div>
				
      </fieldset>
      <br/>
      
      <fieldset>
          <legend>3. ข้อมูลอื่นๆ</legend>
          
          <h3>3.1 ปัญหาที่กลุ่ม/องค์กรของท่านพบในการทำงานมีอะไรบ้าง</h3>
          <div class="clearfix">
					  <label ></label>
					  <div class="input">
					    <textarea class="xxlarge" name="Data[52]" rows="3"><?php echo $Data[52]; ?></textarea>
					  </div>
					</div><!-- /clearfix -->
					
					<h3>3.2 ท่านมีข้อเสนอหรือข้อแนะนำใดๆ ที่จะช่วยส่งเสริมความร่วมมือในการรับมือ/แก้ไข/ฟื้นฟู ปัญหาอุทกภัยครั้งนี้ระหว่างองค์กรหรือภาคส่วนต่างๆ</h3>
          <div class="clearfix">
					  <label ></label>
					  <div class="input">
					    <textarea class="xxlarge" name="Data[53]" rows="3"><?php echo $Data[53]; ?></textarea>
					  </div>
					</div><!-- /clearfix -->
					
					<h3>3.3 ปัจจัยอะไรบ้างที่กลุ่ม/องค์กรของท่านใช้ในการพิจารณาในการทำโครงการหรือในการเลือกพื้นที่ทำโครงการ : (เรียงลำดับความสำคัญจากมากไปน้อย; 1 = มากที่สุด, 5 = น้อยที่สุด)</h3>
          <div class="clearfix">
					  <ol>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[54]" size="30" type="text" value="<?php echo $Data[54]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[55]" size="30" type="text" value="<?php echo $Data[55]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[56]" size="30" type="text" value="<?php echo $Data[56]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[57]" size="30" type="text" value="<?php echo $Data[57]; ?>" >
					    </div>
						</li>
						<li>
							<div class="clearfix">
						    <input class="xlarge"  name="Data[58]" size="30" type="text" value="<?php echo $Data[58]; ?>" >
					    </div>
						</li>
					</ol>
					</div><!-- /clearfix -->
          
      </fieldset>

    </form>
