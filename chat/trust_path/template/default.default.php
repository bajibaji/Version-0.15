<a href="index.php?controller=admin" class="admind">`</a>
<div id="login" class="header">
<?php if ( $dura['error'] ) : ?>
<div class="error">
<?php echo $dura['error'] ?>
</div>
<?php endif ?>
<div style="text-align: center;"><img style="margin:0 10px 0 0;" src="http://www.bajibaji.net/chat/css/logo.png"></div>
<form action="#" method="post"><center>

<div class="field">
<p class="t_name">
<label for="name">随便起个名字:</label><input type="textbox" name="name" value="" size="10" maxlength="10" class="textbox">
</p>
<span class="button">
<input type="submit" name="login" value="<?php e(t("ENTER")) ?>" />
</span>
</div>

<div class="t_toggle">
  <p><font style="font-size:12px;"><a href="#" onclick="toggle();"><span style="color: rgb(255, 0, 153);">[老子要换个头像！]</span></a> - <a href="http://www.bajibaji.net/chat/offline">[离线讨论]</a> - <a href="http://lovejiani.com/blog/dollars">[关于]</a> - <a href="http://www.bajibaji.net">♥</a></font></p>
</div>
<div id="t_extra" style="display:none">
<div class="t_language">
<label for="name">UI Language:</label>
<select name="language">
<option value="en-US">English</option>
<option value="ja-JP">日本語</option>
<option value="zh-CN" selected="selected">中文(简体)</option>
<option value="zh-TW">中文(繁體)</option>

</select>
</div>
<div><span style="color: rgb(255, 0, 153);">鼠标点击图片即可更换</span></div>
<ul class="icons">
<?php foreach ( $dura['icons'] as $icon => $file ) : ?>
<li>
<label>
	
<img src="<?php echo DURA_URL.'/css/'.$file ?>" />
<input type="radio" name="icon" value="<?php echo $icon ?>" />
</label>
</li>
<?php endforeach ?>
</ul>
</div>

<input type="hidden" name="token" value="<?php echo $dura['token'] ?>" />

</center></form>
</div>