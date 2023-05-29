
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&amp;display=swap"
      type="text/css"
    />
    <script src="main.js"></script>
    <style>
      .container {
        border-style: solid;
        border-width: thin;
        border-color: #dadce0;
        border-radius: 8px;
        padding: 40px 20px;
      }
      .container .body {
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial,
          sans-serif;
        border-bottom: thin solid #dadce0;
        color: rgba(0, 0, 0, 0.87);
        line-height: 32px;
        padding-bottom: 24px;
        text-align: center;
        word-break: break-word;
      }
    </style>
  </head>
  <body>
    <table>
      <tbody>
        <tr>
          <td width="8" style="width: 8px"></td>
          <td>
            <div
              style="
                background-color: #f5f5f5;
                direction: ltr;
                padding: 16px;
                margin-bottom: 6px;
              "
            >
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td style="vertical-align: top">
                      <img
                        height="20"
                        src="https://ci5.googleusercontent.com/proxy/siAK5pAvL6HiWqy_Ut4hdMMjmvVsflvWUV0fOtT8hcdO1e9CkJf-GQ1QcgFkZat3Vx8c6HqHa5CRfHHn8HpMuU98DxxYb1OH57jXpx-tF0WVN6x0MvQB0Mk=s0-d-e1-ft#https://www.gstatic.com/accountalerts/email/Icon_recovery_x2_20_20.png"
                        class="CToWUd"
                        data-bit="iit"
                      />
                    </td>
                    <td width="13" style="width: 13px"></td>
                    <td style="direction: ltr">
                      <span
                        style="
                          font-family: Roboto-Regular, Helvetica, Arial,
                            sans-serif;
                          font-size: 13px;
                          color: rgba(0, 0, 0, 0.87);
                          line-height: 1.6;
                          color: rgba(0, 0, 0, 0.54);
                        "
                        >Este es un mensaje de contacto emitido por
                        <a
                          style="
                            text-decoration: none;
                            color: rgba(0, 0, 0, 0.87);
                          "
                          >{{$data['name']}}</a
                        >. cuyo correo es
                        <span
                          ><a
                            href="{{$data['email']}}"
                            target="_blank"
                            >{{$data['email']}}</a
                          ></span
                        >
                        de esta cuenta.</span
                      >
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="container"
            >
              <div
                class="body"
              >
                <div style="font-size: 24px">
                  {{$data['message']}}
                </div>              
                </table>
              </div>           
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>