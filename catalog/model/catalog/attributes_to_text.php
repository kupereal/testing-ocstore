<?php
class ModelCatalogAttributesToText extends Model{public function getText($a664879facc19228bd1e094a6601bb6ec,$a5cd7619c6a44115dfc45e5d171a12459){$adf81daff8f468dcf476264e93dfc386b="";$this->load->model('catalog/product');$a49d843c5488f064fb06e15d1c72a643d=$this->model_catalog_product->getProductAttributes($a664879facc19228bd1e094a6601bb6ec);$a381262a2c0b17ef5561f601da076e894=array();foreach($a49d843c5488f064fb06e15d1c72a643d as $a8584a2dda6e2194083232c8eab963414){foreach($a8584a2dda6e2194083232c8eab963414['attribute']as $a50201708424a0b8e53be823f11414758){if(isset($a5cd7619c6a44115dfc45e5d171a12459['attributes'][$a50201708424a0b8e53be823f11414758['attribute_id']])){if($a5cd7619c6a44115dfc45e5d171a12459['attributes'][$a50201708424a0b8e53be823f11414758['attribute_id']]['show']==1){$a381262a2c0b17ef5561f601da076e894[]=$a50201708424a0b8e53be823f11414758['text'];}else if($a5cd7619c6a44115dfc45e5d171a12459['attributes'][$a50201708424a0b8e53be823f11414758['attribute_id']]['show']==2&&in_array($a50201708424a0b8e53be823f11414758['text'],explode(',',$a5cd7619c6a44115dfc45e5d171a12459['attributes'][$a50201708424a0b8e53be823f11414758['attribute_id']]['replace']))){$a381262a2c0b17ef5561f601da076e894[]=$a50201708424a0b8e53be823f11414758['name'];}}}}if($a381262a2c0b17ef5561f601da076e894){$a626ed377c6fbc3017642f4c6cbd4b1c0=isset($a5cd7619c6a44115dfc45e5d171a12459['attributes_separator'])?$a5cd7619c6a44115dfc45e5d171a12459['attributes_separator']:"/";$adf81daff8f468dcf476264e93dfc386b=implode($a381262a2c0b17ef5561f601da076e894,$a626ed377c6fbc3017642f4c6cbd4b1c0);}if(isset($a5cd7619c6a44115dfc45e5d171a12459['attributes_cut'])){$a7f0612e8dfc088263b2ae6deae34ebaa=strlen($adf81daff8f468dcf476264e93dfc386b)>$a5cd7619c6a44115dfc45e5d171a12459['attributes_cut']?'..':'';$adf81daff8f468dcf476264e93dfc386b=utf8_substr($adf81daff8f468dcf476264e93dfc386b,0,$a5cd7619c6a44115dfc45e5d171a12459['attributes_cut']).$a7f0612e8dfc088263b2ae6deae34ebaa;}return $adf81daff8f468dcf476264e93dfc386b;}}
//author sv2109 (sv2109@gmail.com) license for 1 product copy granted for rhel (shipka2008@mail.ru )
