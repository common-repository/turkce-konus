<?php
/*
Plugin Name: Türkçe Konuş
Plugin URI: http://wordpress.org/extend/plugins/turkce-konus
Description: Toplumda sıkça kullanılan İngilizce kökenli kelimeler yerine kullanabileceğimiz Türkçe kelimeleri hatırlatır.
Version: 2.3
Author: Süleyman ÜSTÜN
Author URI: http://www.suleymanustun.com
*/

class TurkceKonus extends WP_Widget {

  function TurkceKonus() {
    parent::WP_Widget(false, $name = 'Türkçe Konuş');	
  }

  function widget($args, $instance) {		
    extract( $args );
    $theme = apply_filters('widget_title', $instance['theme']);
    $dir = apply_filters('widget_title', $instance['dir']);
    include('lutfen.inc');
    $i = 1;
    $at = rand(1,count($kelimeler));
    foreach ($kelimeler as $eng=>$trk){
      if ($i==$at){
        if ($theme=='' OR $theme=='Bayrak'){
        ?>
        
         <?php if($dir=='' OR $dir=='Yatay'):?>
         <div style="height:72px; padding-left:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/bayrak/hl.gif) no-repeat;">
          <div style="background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/bayrak/hr.gif) no-repeat right;">
           <div style="height:72px; margin-right:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/bayrak/hb.gif);">
            <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; color:#FFFFFF;"><strong>Türkçe Konuş</strong></div>
            <div style="font-family:Trebuchet MS; font-size:10pt; font-weight:bold; line-height:20px; color:#000000;">Lütfen <?=$eng;?> yerine <?=$trk;?> kelimesini kullanın.</div>
           </div>
          </div>
         </div>
         <?php elseif($dir=='Dikey'):?>
         <div style="height:202px; padding-left:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/bayrak/vl.gif) no-repeat;">
          <div style="background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/bayrak/vr.gif) no-repeat right;">
           <div style="height:202px; margin-right:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/bayrak/vb.gif);">
            <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; text-align:center; color:#FFFFFF;"><strong>Türkçe<br/>Konuş</strong></div>
            <div style="font-family:Trebuchet MS; font-size:10pt; text-align:center; font-weight:bold; line-height:24px; color:#000000;">Lütfen<br/><?=$eng;?><br/>yerine<br/><?=$trk;?><br/>kelimesini<br/>kullanın.</div>
           </div>
          </div>
         </div>
         <?php endif;?>
        
        <?php }elseif ($theme=='Deniz'){ ?>
         <?php if($dir=='' OR $dir=='Yatay'):?>
         <div style="height:72px; padding-left:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/deniz/hl.gif) no-repeat;">
          <div style="background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/deniz/hr.gif) no-repeat right;">
           <div style="height:72px; margin-right:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/deniz/hb.gif);">
            <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; color:#FFFFFF;"><strong>Türkçe Konuş</strong></div>
            <div style="font-family:Trebuchet MS; font-size:10pt; font-weight:bold; line-height:20px; color:#000000;">Lütfen <?=$eng;?> yerine <?=$trk;?> kelimesini kullanın.</div>
           </div>
          </div>
         </div>
         <?php elseif($dir=='Dikey'):?>
         <div style="height:202px; padding-left:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/deniz/vl.gif) no-repeat;">
          <div style="background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/deniz/vr.gif) no-repeat right;">
           <div style="height:202px; margin-right:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/deniz/vb.gif);">
            <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; text-align:center; color:#FFFFFF;"><strong>Türkçe<br/>Konuş</strong></div>
            <div style="font-family:Trebuchet MS; font-size:10pt; text-align:center; font-weight:bold; line-height:24px; color:#000000;">Lütfen<br/><?=$eng;?><br/>yerine<br/><?=$trk;?><br/>kelimesini<br/>kullanın.</div>
           </div>
          </div>
         </div>
         <?php endif;?>

        <?php }elseif ($theme=='Yaprak'){ ?>
         <?php if($dir=='' OR $dir=='Yatay'):?>
         <div style="height:72px; padding-left:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/yaprak/hl.gif) no-repeat;">
          <div style="background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/yaprak/hr.gif) no-repeat right;">
           <div style="height:72px; margin-right:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/yaprak/hb.gif);">
            <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; color:#FFFFFF;"><strong>Türkçe Konuş</strong></div>
            <div style="font-family:Trebuchet MS; font-size:10pt; font-weight:bold; line-height:20px; color:#000000;">Lütfen <?=$eng;?> yerine <?=$trk;?> kelimesini kullanın.</div>
           </div>
          </div>
         </div>
         <?php elseif($dir=='Dikey'):?>
         <div style="height:202px; padding-left:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/yaprak/vl.gif) no-repeat;">
          <div style="background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/yaprak/vr.gif) no-repeat right;">
           <div style="height:202px; margin-right:5px; background:url(<?=bloginfo("url");?>/wp-content/plugins/turkce-konus/images/yaprak/vb.gif);">
            <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; text-align:center; color:#FFFFFF;"><strong>Türkçe<br/>Konuş</strong></div>
            <div style="font-family:Trebuchet MS; font-size:10pt; text-align:center; font-weight:bold; line-height:24px; color:#000000;">Lütfen<br/><?=$eng;?><br/>yerine<br/><?=$trk;?><br/>kelimesini<br/>kullanın.</div>
           </div>
          </div>
         </div>
         <?php endif;?>

        <?php }elseif ($theme=='Metin'){ ?>
         <?php if($dir=='' OR $dir=='Yatay'):?>
         <div style="padding:5px;">
          <div style="font: 20px Georgia, Times,Sans-Serif;"><strong>Türkçe Konuş</strong></div>
          <div style="font-family:Trebuchet MS; font-size:10pt; font-weight:bold; line-height:20px;">Lütfen <?=$eng;?> yerine <?=$trk;?> kelimesini kullanın.</div>
         </div>
         <?php elseif($dir=='Dikey'):?>
         <div style="padding:5px;">
          <div style="padding-top:5px; font: 20px Georgia, Times,Sans-Serif; text-align:center;"><strong>Türkçe<br/>Konuş</strong></div>
          <div style="font-family:Trebuchet MS; font-size:10pt; text-align:center; font-weight:bold; line-height:24px;">Lütfen<br/><?=$eng;?><br/>yerine<br/><?=$trk;?><br/>kelimesini<br/>kullanın.</div>
         </div>
         <?php endif;?>

        <?php
        }
      }
      $i++;
    }
  }

  function update($new_instance, $old_instance) {				
    return $new_instance;
  }

  function form($instance) {				
    $theme = esc_attr($instance['theme']);
    $dir = esc_attr($instance['dir']);
    ?>
      <p><label for="<?php echo $this->get_field_id('theme'); ?>"><?php _e('Tema:'); ?>
        <select id="<?php echo $this->get_field_id('theme'); ?>" name="<?php echo $this->get_field_name('theme'); ?>" class="widefat">
          <option><?php echo $theme; ?></option>
          <option>Metin</option>
          <option>Bayrak</option>
          <option>Deniz</option>
          <option>Yaprak</option>
        </select>
      </label></p>
      <p><label for="<?php echo $this->get_field_id('dir'); ?>"><?php _e('Yön:'); ?>
        <select id="<?php echo $this->get_field_id('dir'); ?>" name="<?php echo $this->get_field_name('dir'); ?>" class="widefat">
          <option><?php echo $dir; ?></option>
          <option>Yatay</option>
          <option>Dikey</option>
        </select>
      </label></p>
    <?php 
  }

}

add_action('widgets_init', create_function('', 'return register_widget("TurkceKonus");'));
?>