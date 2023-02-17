<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./effect.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head class="d-flex flex-column min-vh-100">

<body class="d-flex flex-column min-vh-100">

    <?php

    session_start();
    $user = $_SESSION['user'] ?? null;
    ?>

    <nav class="navbar navbar-expand-lg bg-transparent shadow-lg">
        <div class="container-fluid">
            <strong><a class="navbar-brand text-light" href="#">APP</a></strong>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <!-- SIGN IN AND SIGN UP LINKS -->
                    <li class="nav-item ms-auto" id="btnSignIn" <?php echo $user ? 'hidden' : '' ?>>
                        <a class="nav-link" href="/signin.php">Sign In</a>
                    </li>
                    <li class="nav-item" id="btnSignUp" <?php echo $user ? 'hidden' : '' ?>>
                        <a class="nav-link" href="/signup.php">Sign Up</a>
                    </li>

                    <!-- USER LOGGED AND LOGOUT -->
                    <li class="nav-item ms-auto" <?php echo $user ? '' : 'hidden' ?>>
                        <a class="nav-link disabled" href="#">
                            <?php echo $user['username'] ?>
                        </a>
                    </li>
                    <li class="nav-item" id="btnSignOut" <?php echo $user ? '' : 'hidden' ?>>
                        <a class="nav-link" href="/signout.php">Sign Out</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>



    <div class="line-container">
        <svg viewBox="0 0 245 1538" fill="none">
            <path
                d="M2 47C2 34.668 7.11149 23.1993 12.7778 13C17.1288 5.16825 23.0878 0.255673 32.9444 2.55556C39.2773 4.03324 44.7197 9.16991 49.8333 12.8889C55.1603 16.763 56.7211 19.0948 58.4444 25.2222C60.9169 34.0132 65.0018 43.83 64.7222 53.0556C64.5756 57.8944 62.6345 62.0144 61.1111 66.5C59.6125 70.9126 59.3197 75.6115 57.7778 80C49.5925 103.297 49 128.015 49 152.5C49 164.93 43.846 178.229 41.7778 190.556C40.8619 196.014 40.1017 201.459 40 207C39.9924 207.416 39.6787 215.954 40.5556 211.444C44.4149 191.596 50.2505 172.12 54.5556 152.333C56.169 144.918 56.7053 137.885 57 130.333C57.3316 121.837 59.5812 114.802 62.1111 106.778C64.9236 97.8568 65 89.1518 65 79.9445C65 67.1088 69.3864 57.1813 75.4444 46.1667C79.1014 39.5177 89.961 45.8541 93.2222 49.2222C100.352 56.5855 103.717 67.8116 102.389 77.8333C100.732 90.3354 101.183 103.886 95.7778 115.556C89.2487 129.652 86.5073 145.156 83 160.222C78.6245 179.018 71.499 195.881 74.1667 215.389C75.0448 221.81 76.4394 228.191 78.3333 234.389C78.795 235.9 78.8161 238.452 79.6667 235.333C81.2415 229.559 81.6079 223.562 83.1111 217.778C85.9665 206.791 89.4496 196.933 90.3333 185.444C91.5054 170.208 92.7838 155.238 94.4444 140.056C95.2909 132.317 98 125.314 98 117.556C98 110.85 97.1329 103.5 99.1111 97C101.183 90.1933 104.215 83.6272 106.778 77C107.894 74.1125 109.184 66.1122 113 66C118.332 65.8432 123.7 65.7683 128.444 68.5C135.296 72.445 138.593 72.7986 141.444 80.9445C145.339 92.0721 143.743 104.213 144 115.778C144.128 121.527 146.879 125.724 145.778 131.778C145.281 134.509 144.68 136.856 145.222 139.667C146.097 144.197 150.6 144.291 153.944 146.778C168.212 157.387 182.833 167.627 196.778 178.667C199.31 180.671 200.373 182.343 199.944 185.556C199.398 189.656 197.277 194.37 195.222 197.833C191.819 203.57 188.477 209.319 185.167 215.111C183.578 217.892 180.19 221.572 180 225C179.412 235.578 175.326 246.663 176 257.222C176.349 262.687 179.937 263.024 182.889 266.222C184.651 268.131 173.622 280.467 172.667 281.667C168.722 286.62 164.789 290.293 161.222 295.556C155.335 304.242 151.136 313.744 146.056 322.889C143.604 327.301 141.419 330.1 140.444 335.111C138.789 343.622 136.598 352.232 133.222 360.222C129.511 369.005 125.749 377 115.222 377C112.931 377 112.351 378.184 110.333 379C102.778 382.054 94.6963 383.546 87 386.111C82.7503 387.528 78.5234 389.581 75.2222 392.667C70.1692 397.39 70.8036 403.371 68.6667 409.444C63.0689 425.354 51.2767 436.741 41.7222 450C37.7113 455.566 31.68 463.612 30.6111 470.667C29.2398 479.717 39.1673 486.799 44.7778 492.333C51.495 498.959 59.5817 506.772 68.5 510.444C70.2962 511.184 72.3235 511 74.2222 511C81.168 511 87.9834 511.918 94.8889 512.556C105.685 513.553 115.713 516.37 126.333 517.778C131.244 518.429 136.106 518.072 140.833 516.667C151.419 513.52 161.95 510.402 172.611 507.5C183.473 504.543 193.722 501.509 201.333 492.778C205.137 488.415 208.077 483.168 211.222 478.333C214.544 473.229 218.918 468.171 220.444 462.167C223.137 451.575 225.673 440.093 224.889 429.111C224.098 418.04 218.608 417.232 210.222 412.556C191.299 402.002 176.361 385.389 158.444 373.444C148.955 367.118 135.845 369.218 125.056 368.944C119.521 368.804 103.233 368.576 108.556 367.056C110.129 366.606 112.798 367 114.278 367C123.46 367 132.482 366.619 141.444 364.444C146.521 363.213 150.7 360.921 156.111 361.167C160.72 361.376 169.14 362.542 173.444 364.444C188.788 371.224 204.387 376.308 211.944 392.556C217.752 405.041 219.984 419.432 222.167 432.889C223.187 439.181 225.904 444.931 224.5 451.389C223.637 455.361 221.807 458.831 220 462.444C216.092 470.26 212.771 478.933 208 486.222C203.725 492.754 202.331 498.277 199.444 505.333C197.713 509.566 193.66 511.213 191 514.611C184.77 522.571 179.455 530.936 169.556 534.5C155.598 539.525 147.8 553.352 139.222 564.667C122.819 586.302 107.074 609.025 93.5556 632.444C90.8442 637.142 88.5379 641.889 86.2222 646.778C83.8673 651.749 79.9641 652.85 76.3333 656.556C69.3331 663.7 73.494 680.135 75.6667 688.722C77.7112 696.803 80.5184 718.396 93.0556 715.889C107.308 713.038 113.539 693.601 125.556 687C131.721 683.613 133.523 681.135 136.833 674.722C138.615 671.271 138.246 667.429 140.556 664.222C145.083 657.934 155.292 665.167 159.5 667.556C163.772 669.98 165.511 671.972 168 675.778C171.426 681.018 168.105 685.641 165.556 690.944C159.407 703.734 153.925 717.173 148.444 730.222C144.899 738.663 143.935 752.752 150 760.333C157.733 770 174.121 758.435 179.944 752.889C188.22 745.008 193.637 733.306 198.444 723.111C202.612 714.273 197.438 704.701 204.556 696.444C208.888 691.418 208.608 680.351 217.222 683.222C232.943 688.463 235.224 705.311 240.222 718.556C247.736 738.467 238.337 757.534 226.333 773.167C210.915 793.247 197.25 815.011 179.889 833.556C172.029 841.951 163.496 848.396 157.5 858.389C152.724 866.349 147.264 873.703 143 882C141.152 885.596 137.812 891.328 134.611 893.889C132.321 895.721 140.431 892.371 142.778 890.611C143.52 890.054 143.847 889.792 143.944 891.111C144.594 899.885 144.627 908.507 146.222 917.222C147.551 924.481 148.877 932.287 150.667 939.444C151.555 942.999 154.448 948.092 153.833 951.778C153.076 956.322 143.962 960.75 140.556 963.222C126.352 973.529 108.137 986.253 90.0556 984.444C81.4318 983.582 61 982.811 61 970.833C61 966.155 60.1125 956.984 63.1667 953.167C65.0072 950.866 69.1104 949.829 71.5 948.278C75.8652 945.444 78.6868 941.017 83 938.222C93.6273 931.337 106.924 931.515 118.667 928.111C127.784 925.468 137.383 928.256 146.611 926.889C160.499 924.831 172.222 912.713 183.389 905.056C187.23 902.422 190.492 899.107 193.944 896C201.149 889.516 197.509 901.022 196.778 906.333C194.854 920.295 189.174 933.057 186.778 946.833C186.096 950.753 183.266 954.191 181.5 957.667C177.883 964.785 174.804 972.15 172.444 979.778C168.09 993.854 159.569 1004.47 151.778 1016.89C145.411 1027.04 141.374 1039.6 133.611 1048.56C129.87 1052.87 131.062 1059.12 127.667 1063.33C124.939 1066.72 121.694 1068.41 120.222 1072.78C118.904 1076.69 118.677 1080.31 116.222 1083.78C109.256 1093.63 103.566 1103.75 97.9444 1114.39C93.1788 1123.41 80.2817 1125.31 80.7778 1136.22C81.1259 1143.88 72.3915 1151.21 70.5556 1158.89C69.5905 1162.92 66.3346 1166.65 66 1170.56C65.8624 1172.16 65.5666 1172.27 64.1111 1173C59.5539 1175.28 56.8526 1179.42 53.7778 1183.33C47.9825 1190.7 39.7082 1198.84 36.9444 1208.06C36.3623 1210 35.227 1211.39 34.0556 1213C32.9098 1214.58 32.6782 1219.41 31.2222 1218.11C29.7826 1216.83 31.1289 1207.39 31.2222 1206C32.0387 1193.88 36.0563 1182.31 39.4444 1170.72C42.0761 1161.73 44.7473 1153.38 49.8333 1145.44C52.3297 1141.55 54.0997 1138.32 55.8333 1134.11C57.9957 1128.86 61.3594 1123.91 64.8333 1119.44C67.9285 1115.46 72.5949 1113.37 75.6667 1109.44C79.0368 1105.14 79.1666 1100.98 84.2222 1097.89C92.2511 1092.98 100.257 1088.72 107.778 1083C120.992 1072.95 135.271 1064.51 148.111 1054C151.281 1051.41 155.309 1049.5 158.111 1046.5C160.137 1044.33 160.074 1041.26 162 1039C166.096 1034.2 169.384 1028.48 172.889 1023.22C178.225 1015.22 195.473 1011.89 203.778 1014.89C215.845 1019.24 209.128 1034.59 208.167 1043.89C207.41 1051.2 202.28 1055.18 196.556 1059.56C176.601 1074.8 146.192 1053.19 132.056 1039.06C126.549 1033.55 132.839 1038.36 135 1040.44C140.57 1045.8 146.217 1050.83 151.944 1056.06C155.362 1059.18 158.488 1062.59 161.278 1066.28C162.36 1067.71 163.597 1070.22 165.444 1070.89C168.468 1071.99 171.437 1074.6 172.778 1077.67C181.596 1097.82 178.968 1120.42 177.222 1141.56C176.935 1145.03 178.759 1153.8 176 1156.56C175.051 1157.5 172.749 1157.66 171.556 1157.78C161.151 1158.78 150.831 1156.95 141.333 1152.61C133.419 1148.99 125.741 1144.05 118.5 1139.22C116.016 1137.57 112.943 1135.69 111.778 1132.78C110.229 1128.9 108.941 1124.96 107.444 1121.11C106.974 1119.9 104.195 1114.42 104.056 1115.11C103.296 1118.91 106.193 1122.4 107.333 1125.78C109.363 1131.79 109.472 1138.3 112.056 1144.11C114.672 1150 116.659 1156.52 117 1163C117.149 1165.84 118.939 1167.65 119 1170.22C119.121 1175.29 119 1180.38 119 1185.44C119 1193.38 117.975 1200.05 116 1207.78C113.41 1217.91 109.531 1228.93 108.111 1239.22C107.096 1246.58 107.319 1252.04 103.222 1258C101.891 1259.94 101 1259.1 101 1262C101 1264.79 101.54 1266.98 101.944 1269.61C102.89 1275.76 106.884 1278.98 111 1283.33C117.292 1289.98 122.412 1297.12 129.667 1303C153.58 1322.39 186.396 1322.83 208.222 1300.22C214.214 1294.02 214.596 1287.65 213.889 1279.17C213.021 1268.75 201.789 1258.24 195.667 1250.44C189.099 1242.08 182.561 1237.35 173.444 1232.44C165.173 1227.99 154.323 1225.36 144.778 1228.22C135.822 1230.91 126.726 1233.61 117.778 1236.44C109.363 1239.11 105.896 1240.02 102.556 1247.78C99.0682 1255.88 102.132 1263.9 93.5556 1269.44C89.622 1271.99 85.7508 1280.86 85 1285.56C84.3401 1289.68 82.4381 1293.36 81.0556 1297.28C79.901 1300.55 78 1299.98 78 1304.22C78 1308.22 80 1311.06 80 1314.94C80 1317.88 80.8664 1321.31 82 1324C87.1274 1336.18 90.8565 1349.13 93.5 1362.06C95.2684 1370.7 99.6864 1378.73 107.111 1383.5C124.507 1394.68 140.003 1407.67 162.556 1403.78C167.8 1402.87 173.449 1396.93 177.222 1393.56C186.725 1385.05 193.207 1374.39 202.056 1365.39C209.374 1357.94 214.783 1350.56 216.222 1340.22C217.046 1334.3 221 1329.47 221 1323.39C221 1313.08 223 1302.88 223 1292.5C223 1285.51 223.115 1278.55 221.111 1271.78C218.356 1262.47 212.984 1254.57 208.667 1246C201.147 1231.07 192.434 1216.93 183.944 1202.5C179.844 1195.53 177.967 1189.61 170.333 1187.56C163.65 1185.76 157.427 1183.87 150.444 1184C142.233 1184.16 131.865 1188.54 124.167 1191.11C112.853 1194.88 106.758 1202.21 102.222 1212.89C96.056 1227.41 87.1892 1241.78 83.6111 1257.22C82.2589 1263.06 82.2186 1269.31 78.2778 1274.17C75.736 1277.3 72.0619 1279.03 71.7222 1283.44C71.246 1289.64 72 1296.32 72 1302.56C72 1310.75 72.1927 1318.98 71.9444 1327.17C71.6633 1336.44 71.9163 1347.67 68.5556 1356.44C63.5466 1369.52 55.4164 1380.1 53.9444 1394.33C52.7384 1405.99 46.7972 1420.83 51.2222 1432.33C53.0693 1437.14 56.7826 1441.89 59.4444 1446.22C65.5724 1456.2 72.161 1465.88 78.3333 1475.83C84.2311 1485.34 88.6812 1496.04 96.4444 1504.22C102.683 1510.8 114.489 1517.78 115 1528C115.088 1529.77 115.063 1538.72 118.889 1534.89C122.362 1531.42 114.075 1528.92 112 1528"
                stroke="black" stroke-width="3" stroke-linecap="round" />
        </svg>
    </div>



    <section class="one">
        <h1 class="scroll" data-rate=".4" data-direction="vertical">ocean stuff</h1>
    </section>

    <section class="two">
        <h1 class="scroll" data-rate=".2" data-direction="vertical">ocean stuff</h1>
        <p>Big watermark</p>
    </section>


    <script>
        let path = document.querySelectorAll('path')[0];

        let pathLength = path.getTotalLength();

        path.style.strokeDasharray = pathLength + ' ' + pathLength;

        path.style.strokeDashoffset = pathLength;


        window.addEventListener('scroll', () => {

            let scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

            let drawLength = pathLength * scrollPercentage;

            path.style.strokeDashoffset = pathLength - drawLength;
        });

    </script>


    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>