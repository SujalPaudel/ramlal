<html>
  <head>
    <title>
      Register Email
    </title>
  </head>
  <body>
    <table>
      <tr><td>Dear {{ $name }} !</td></tr>
      <tr><td>&nbsp;</td></tr>
      <tr><td>Please click the following link to confirm your account</td></tr>
      <tr><td>&nbsp;</td></tr>
      <tr><td><a href = "{{url('confirm/'.$code)}}">Confirm Account</a></td></tr>
      <tr><td>&nbsp;</td></tr>
      <tr><td>Thanks and Regards</td></tr>      
      <tr><td>Harmonic Grace</td></tr>      

    </table>
  </body>
</html>