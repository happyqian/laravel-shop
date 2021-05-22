<?php
return [
    'alipay' => [
        'app_id'    => '2016091600527144',
        'ali_public_key'    => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA04Buop87TuFwoeWCXBSbiJdS3Nx05uSG602/K7G7drBUwRkn2ERh6hwWN7h44Mc50tU9R/M4Ju4ueC+2FUuk6OEu1I0L7RTBdvTh4+6r29e12DXsnExqwLeQaGjuCj+PS9HgR/am3YYBjO84gsbAv4FbNVjqzcUKzWIfcofLdzEZCJCHOBagBaUYajGPDjbpcPo9edZ14IiyDldqlQhUp6rK8yd+vvauJkS0H9P8BDqPVj5dgWSJep3Yu5vh46JkMt6JIwJUNhmwyd0VwRV0l4gRI/oc7E7oUlOGPKRHBR8YFTogxvIObNnQSB+XlUks/qFVHW0TbU8GOJycIUUF5QIDAQAB',
        'private_key'   => 'MIIEogIBAAKCAQEAj3jJsBsALCOWNX7nSRbJeXS89KkDMqIcvXd/W0bE0jSjE4z3wF7fj56gA/y0qA4dH+cXoxS2QAac2Tb18yQUhrgk7bNySmHf5bv2J/26Jpmgv83FQcq+pL2S4A5+8YW+wQHpSj5pXJKB8ZAXusvBNxpbYBSvJQ1IbXUQvza2TFsTkLypsC/Gdw7MPJBtuYgkSEVtAT1ZG451kHhnnOv9dWrHaxR/gq1zY5SQgYn8lFPuu49DKCwZ9IMk0LR2tEHE8GTHfXPY+HOi475lYYYg57kzZUWu0lC6o1wlEQiaufXCEU5y+60UBvABMLtcXZG99iXpPHJSjjBNR167fFZQhQIDAQABAoIBAFJfy40tM4AkPo4gerLgPnVZrVPb5lYf9dhiz+CcVU1Lo4YKHgV5c2qGbOFdKmyDDf3PNScRMUK5iTy97aDYSmC/QZSovyot39uLe92iNEsNUdpOTr9jpOn5Xmb+a6xIWil+628RPnVEOQ905+r8Kcd1fpk/xv/DDJ6r5B2lUC2uDlrn5Ij01utWA00SiGrvL+epOMW/5zF35xTGdguv6fVxq3tT60kayfdQ6ARmIuMAyugBh9+9hwNrCsg4JUmByghB7NZ7Dmq4c5ynf4jQO+rqyMm8+1CXotN2WmKOweUFQK5BMCNDHAf/3yEuHzHc1j82xVuCDxzNl2ktgqPY7VECgYEA4CSTpiHoD0X09dq02XPvlgabrBxKvbDioohrRQyvrnDxsy/sqEPr8PrzdAik8LhuzR2AHW0M0qI3aELUFVe+JdfXSQqcgq5vW6LpH4pd2GnDKWjcTto7Z6t2OKnAumwRH+Flg1B5jNju8rnvQCDmIympsU03clZa8ji+lONBEAMCgYEAo90AHYoGgyFyWI1OP3a4L51koKcq9d2uyXKVL0jsEj1oHlkKWbptq4qne9j/xm3KUBDfAczULVNswlQb4vgn8P7WAt46Oc+5x0Jj7RgeQ3aYURePFgS+rexFE9R7XJBa3acQ+oYkKDWt17rgrm30SrxJPkKCE5QHZn7LZQtbStcCgYBHWn2CUqLsUcnkhkYyP10S9nGSPcNxVaEgOqtjZOF8d8oJ0ATXoB+5LDpaQvI3C4+CTpTdSTzexPM8hqG7VZ5br7WCNBWU6HDczCTIfKTZYvnU8ePIWmK04vmUmj2XWxWsf3VwcyruspSGwrguQwrgQMAbiEhRZro3B+drwFiS/wKBgAPgIDaSoyDK07eAcA9UMXr+z/h0u7Fg8tdU3G5n3R15UlMVbAc/P4TFHLzzHumEgzpti7ixLXt885+M+bPehqNOg6VBuELRxOUPjul2npCd53BTjFDK/++BHQkhB2HjECMZ5m7maUiCLIBjrRizBQoXdewBCq6H27zy1sCnChu1AoGAcJcJMpLkwMflVS0B0Abf5sWMKgtHpo0TRAuT3WV4M3YmkDnMuslkctwLCh1O0qJ5S861JoZUaVKiEIxACV5JnSl7J5M4+CQKYwKnVdBNyjB/+8CwxpgxELRFSd37IOelDgon+qR6kP2pwQWRo038U3XPKoLNfNFrir0O5HMzXJo=',
        'log'   => [
            'file' => storage_path('logs/alipay.log'),
        ]
    ],

    'wechat'    => [
        'app_id'    => '',
        'mch_id'    => '',
        'key'   => '',
        'cert_client'   => '',
        'cert_key' => '',
        'log'    => [
            'file' => storage_path('logs/wechat.log'),
        ]
    ]
];