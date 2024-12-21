<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{{ config('app.name') }}</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=League+Spartan:wght@300;500;700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:wght@600&family=Quicksand:wght@300;400;500;600&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
.inner-body {
    font-family: "DM Sans", sans-serif;
}
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
img {
    width:70px;
    height:50px;
}

.button {
  border: 1px solid #46e0d3;
  background-color: #46e0d3;
  border-radius: 9999px; /* Equivalent to rounded-3xl */
  padding: 0.5rem 2rem; /* p-2 px-8 */
  margin: 2.5rem 0; /* mx-0 m-10 */
  font-weight: 500; /* font-medium */
  transition: all 0.3s ease; /* Default transition for smooth hover effect */
}

.button:hover {
  border: 2px solid #002265; /* hover:border-[#002265] with [2px] border */
  background-color: white; /* hover:bg-white */
  color: #0d41c0; /* hover:text-[#0d41c0] */
}
</style>
{{ $head ?? '' }}
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0" style="border: hidden !important;">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>
<td class="content-cell">
{{ Illuminate\Mail\Markdown::parse($slot) }}

{{ $subcopy ?? '' }}
</td>
</tr>
</table>
</td>
</tr>

{{ $footer ?? '' }}
</table>
</td>
</tr>
</table>
</body>
</html>
