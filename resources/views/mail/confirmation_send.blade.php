<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  body {
  margin:0;
}
  </style>
</head>
<body>
<table width="100%" height="100%" border="0" cellpadding="20" cellspacing="0" style="margin:0;border-collapse:collapse;border-spacing:0;padding:20px;font-family: Arial;">
  <tr>
    <td width="100%" valign="top" align="center" bgcolor="#eceeed">
      <table border="0" cellpadding="0" cellspacing="0" class="body" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;width:100%;background:#fff;max-width:550px;margin:0px;border-radius:5px;">
        <tr style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
          <td class="container" style="padding:0;border-collapse:collapse;border-spacing:0;">
            <div class="content" style="margin:0;padding:0;">
              <table class="main" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                <tr style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                  <td class="wrapper" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                    <table border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                      <tr style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                        <td style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                          <div class="in-content" style="margin:0;padding:0;padding:30px;">
                            <h3 style="margin:0;font-family:Helvetica, Arial;line-height:1.4;color:#3f526d;font-weight:500;font-size:20px;margin:20px 0px 15px;padding:0;">Welcome {{$username}}!</h3>

                            <p style="margin:0;padding:0;font-family:Helvetica, Arial;margin-bottom:10px;font-weight:300;color:#96a6b0;font-size:15px;line-height:1.6;">
                            Welcome to our Blog ... ! 
                            Hello, this mail from <span style="color:blue">"{{$name}}"</span>
                            Please following the instructions ...
                            </p>

                            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" width="100%" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                              <tbody style="margin:0;padding:0;">
                                <tr style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                                  <td align="center" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                                    <table border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                                      <tbody style="margin:0;padding:0;">
                                        <tr style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                                          <td style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
                                            <div style="margin:0;padding:0;text-align: center;width: 100%;">
                                              <a href="#" target="_blank" class="cta-button" style="margin:0;padding:0;display:inline-block;background:blue;color:#fff;text-decoration:none;padding:15px 25px;border-radius:5px;font-size:14px;letter-spacing:1px;font-weight:100;margin:20px auto;"><span style="color:white"> {{$confirm_code}}  </span></a></div>
                                              <p>Click <a href="http://localhost:8000/code">here</a> to confirm your Subscribe!</p>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="100%" valign="top" align="center" bgcolor="#eceeed">
      <table style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;width: 100%;max-width: 550px;margin: 0px auto;text-align: center;color: #ccc;font-size: 14px;" align="center">
        <tr style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">
        <label for="" style="color:black; font-size:20px;">Contact Email :</label>
          <td style="margin:0;padding:0;border-collapse:collapse;border-spacing:0;">laravel.myowin.mm@gmail.com</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>