<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Here</title>
<?php $this->load->view('template/service_head'); ?>
</head>

<body>
MOBILE LOGIN PAGE TEST
<form method="post" action="<?php echo base_url(); ?>users/mobile_login">
Username <br />
<input type="text" value="" id="login_user" name="posted_data[username]" /><br />
Password <br />
<input type="password" value="" id="login_pw" name="posted_data[password]" /><br />

<input type="submit" value="Log in" />
</form>
</body>
</html>