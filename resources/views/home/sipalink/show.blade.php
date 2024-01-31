<!DOCTYPE html>
  <html>
    <head>
  		<title>Redirect Page</title>
  			<meta charset="UTF-8" />
  			<meta http-equiv="refresh" content="2;
            URL=
                @if (str_starts_with( $links -> link, 'http'))
                {{ $links -> link }}
                @else
                {{ 'https://' . $links -> link }}
                @endif
            " />
  	</head>
  	<body>
  		<p>Jika Link tidak terbuka dalam waktu 3 detik, klik <a href="
                @if (str_starts_with( $links -> link, 'http'))
                {{ $links -> link }}
                @else
                {{ 'https://' . $links -> link }}
                @endif
            ">disini</a> untuk pergi ke link tujuan.</p>

                @if (str_starts_with( $links -> link, 'http'))
                {{ $links -> link }}
                @else
                {{ 'https://' . $links -> link }}
                @endif
  	</body>
  </html>
