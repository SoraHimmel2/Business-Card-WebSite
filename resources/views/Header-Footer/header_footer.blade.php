<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Organic Web Design</title>
<link href ="stylesheets/my_styles.css" rel = "stylesheet" />
<link href ="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" rel = "stylesheet" />
</head>
<body>
 <!-- Header -->
@include('Header-Footer.header')

<!-- Content -->
					@yield('content')




	<!-- Footer -->
@include('Header-Footer.footer')

</body>
</html>
