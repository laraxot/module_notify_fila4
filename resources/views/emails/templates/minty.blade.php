<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        {!! $_theme->cssInLine('notify::css/minty.css') !!}
    </style>
    @if (isset($css))
        <style type="text/css">
            {{ $css }}
        </style>
    @endif
</head>

<body>

    <div class="block">
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable"
            st-sortable="preheader">
            <tbody>
                <tr>
                    <td width="100%">
                        <table width="580" cellpadding="0" cellspacing="0" border="0" align="center"
                            class="devicewidth">
                            <tbody>
                                <!-- Spacing -->
                                <tr>
                                    <td width="100%" height="50"></td>
                                </tr>
                                <!-- Spacing -->
                                <tr>
                                    <td align="right" valign="middle"
                                        style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999"
                                        st-content="preheader">
                                        <!--							If you cannot read this email, please  <a class="hlite" href="#" style="text-decoration: none; color: {{ Config::get('beautymail.colors.highlight', '#004cad') }}">click here</a>-->
                                    </td>
                                </tr>
                                <!-- Spacing -->
                                <tr>
                                    <td width="100%" height="5"></td>
                                </tr>
                                <!-- Spacing -->
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->
    </div>
    <div class="block">
        <!-- start of header -->
        <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable"
            st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="580" bgcolor="{{ Config::get('beautymail.colors.highlight', '#004cad') }}"
                            cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"
                            hlitebg="edit" shadow="edit">
                            <tbody>
                                <tr>
                                    <td>
                                        <!-- logo -->
                                        <table width="280" cellpadding="0" cellspacing="0" border="0"
                                            align="left" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="270"
                                                        style="padding: 10px 0 10px 20px;" class="logo">
                                                        <div class="imgpop">
                                                            <a href="#"><img
                                                                    src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}"
                                                                    alt="{{ isset($senderName) ? $senderName : '' }}"
                                                                    width="{{ array_key_exists('width', $logo) ? $logo['width'] : '' }}"
                                                                    height="{{ array_key_exists('height', $logo) ? $logo['height'] : '' }}"
                                                                    border="0"
                                                                    style="display:block; border:none; outline:none; text-decoration:none;"
                                                                    st-image="edit" class="logo"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- End of logo -->
                                        <!-- menu -->
                                        <table width="280" cellpadding="0" cellspacing="0" border="0"
                                            align="right" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td width="270" valign="middle"
                                                        style="font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;line-height: 24px; padding: 10px 0;"
                                                        align="right" class="menu" st-content="menu">
                                                    </td>
                                                    <td width="20"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- End of Menu -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- end of header -->
    </div>

    @section('content')
    @show




    <div class="block">
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable"
            st-sortable="postfooter">
            <tbody>
                <tr>
                    <td width="100%">
                        <table width="580" cellpadding="0" cellspacing="0" border="0" align="center"
                            class="devicewidth">
                            <tbody>
                                <!-- Spacing -->
                                <tr>
                                    <td width="100%" height="5"></td>
                                </tr>
                                <!-- Spacing -->
                                @if (isset($unsubscribe))
                                    <tr>
                                        <td align="center" valign="middle"
                                            style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999"
                                            st-content="preheader">
                                            {{ $unsubscribe }}
                                        </td>
                                    </tr>
                                @endif
                                <!-- Spacing -->
                                <tr>
                                    <td width="100%" height="5"></td>
                                </tr>
                                <!-- Spacing -->
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->
    </div>

</body>

</html>
