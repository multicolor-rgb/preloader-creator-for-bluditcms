<?php
    class preloaderCreator extends Plugin {
       
        public function init(){
            $this->dbFields = array(
        'preloader'=> '',
        'background'=> '#fff',
 
            );
        }

        
        public function form(){

            $html = '
            <br>
            <p>Choose your preloader animation</p>
            <select name="preloader">
        <option value="1" '.($this->getValue('preloader')==="1"?"selected":"").'>Preloader 1</option>
        <option value="2" '.($this->getValue('preloader')==="2"?"selected":"").'>Preloader 2</option>
        <option value="3" '.($this->getValue('preloader')==="3"?"selected":"").'>Preloader 3</option>
        <option value="4" '.($this->getValue('preloader')==="4"?"selected":"").'>Preloader 4</option>
        <option value="5" '.($this->getValue('preloader')==="5"?"selected":"").'>Preloader 5</option>
        <option value="6" '.($this->getValue('preloader')==="6"?"selected":"").'>Preloader 6</option>
        <option value="7" '.($this->getValue('preloader')==="7"?"selected":"").'>Preloader 7</option>
        <option value="8" '.($this->getValue('preloader')==="8"?"selected":"").'>Preloader 8</option>
        <option value="9" '.($this->getValue('preloader')==="9"?"selected":"").'>Preloader 9</option>
        <option value="10" '.($this->getValue('preloader')==="10"?"selected":"").'>Preloader 10</option>
        <option value="11" '.($this->getValue('preloader')==="11"?"selected":"").'>Preloader 11</option>
        <option value="12" '.($this->getValue('preloader')==="12"?"selected":"").'>Preloader 12</option>
            </select>
<br>
            <p>Choose your background</p>
            <input type="color" name="background" value="'.$this->getValue('background').'" class="form-control form-control-color" style="heigth:50px;">


            
<br><br>

<style>
.boxer{text-align:center;padding:10px;box-sizing:border-box;margin:20px 0;}
.boxer img{max-width:100%;max-height:50px;}
.boxer-grid{width:100%;display:grid;margin:0 auto;grid-template-columns:repeat(4,1fr);}
@media(max-width:960px){
	.boxer{width:100%;}
	.boxer-grid{rid-template-columns:repeat(2,1fr);display:grid;}
}
</style>
	
	
	<div class="boxer-grid">
	<div class="boxer">
	<p><b>Preloader 1</b></p>
		<img src="'.$this->domainPath().'img/1.svg">
		</div>
		
		<div  class="boxer">
	<p><b>Preloader 2</b></p>
		<img src="'.$this->domainPath().'img/2.svg">
		</div>
			<div  class="boxer">
	<p><b>Preloader 3</b></p>
		<img src="'.$this->domainPath().'img/3.svg">
		</div>
                                                                              
			<div  class="boxer">
	<p><b>Preloader 4</b></p>
		<img src="'.$this->domainPath().'img/4.svg">
		</div>
		
			<div class="boxer">
	<p><b>Preloader 5</b></p>
		<img src="'.$this->domainPath().'img/5.svg">
		</div>
		
	<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 6</b></p>
		<img src="'.$this->domainPath().'img/6.svg">
		</div>
		
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 7</b></p>
		<img src="'.$this->domainPath().'img/7.svg">
		</div>
		
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 8</b></p>
		<img src="'.$this->domainPath().'img/8.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 9</b></p>
		<img src="'.$this->domainPath().'img/9.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 10</b></p>
		<img src="'.$this->domainPath().'img/10.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 11</b></p>
		<img src="'.$this->domainPath().'img/11.svg">
		</div>
		
			<div style="text-align:center;padding:10px;box-sizing:border-box;" class="boxer">
	<p><b>Preloader 12</b></p>
		<img src="'.$this->domainPath().'img/12.svg">
		</div>
			</div>
		

	

    <div class="bg-danger text-light col-md-12 mt-5 py-3 d-block border text-center">
      
		<p> If you want to support my work and see new plugins 😊 </p>

		<a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"  />
		</a>
		
		</div>
            ';
		return $html;

        }


        public function siteBodyEnd(){
		echo '<script src="'.$this->domainPath().'js/preloader-script.js"></script>';
        }
		

		public function siteHead(){	
		echo '<link rel="stylesheet" href="'.$this->domainPath().'css/preloader-style.css">';
		echo '<style>#preload{background:'.$this->getValue('background').'}</style>';		 
		}


		public function siteBodyBegin(){
			echo'<div id="preload">
			<img src="'.$this->domainPath().'img/'.$this->getValue('preloader').'.svg">
			</div>';
		}


    }
?>