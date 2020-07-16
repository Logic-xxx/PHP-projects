<?php
//ABSTRACT CLASS
abstract class mainData{
abstract public function show();
}
//INHERITANCE
//PUBLIC
//OVERRIDING
//CONSTANT
class Star extends mainData {
const LEAVING_MESSAGE="Thank you for visiting US!";
public $price;
public $internet;
public $minute;
function __construct()
{
$this->internet;
$this->minute;
$this->price;
}

    /**
     * @param mixed $internet
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
    }

    /**
     * @param mixed $minute
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * @return mixed
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @return mixed
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public final function show()
{
    echo "Minutes:"." ".$this->minute.'<br>';
    echo "Internet pack:"." ".$this->internet.'<br>';
    echo "Price:"." ".$this->price.'<br>';
}
public static function getStar(){
        echo "This is a Star tariff. Be faster in internet. Buy it!!! ";
        echo "The “Star” option provides the ability to use a SIM card with the current tariff as an access point to the Internet for other devices.

To use your smartphone in modem mode and share Internet traffic with other users, activate the \"Star\" service";
}
}
//PROTECTED
//CONSTRUCT
class BigStar extends mainData {
    protected $price;
    protected $internet;
    protected $minute;
    function __construct()
    {
        $this->internet;
        $this->minute;
        $this->price;
    }

    /**
     * @param mixed $minute
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $internet
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
    }
    /**
     * @return mixed
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @return mixed
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    //FINAL
    //STATIC
public final function show()
{
    echo "Minutes:"." ".$this->minute.'<br>';
    echo "Internet pack:"." ".$this->internet.'<br>';
    echo "Price:"." ".$this->price.'<br>';
}
public static function getBigStar(){
echo "This is a Big Star tariff. Choose it, live in cheer.";
    echo "The “BigStar” option provides the ability to use a SIM card with the current tariff as an access point to the Internet for other devices.

To use your smartphone in modem mode and share Internet traffic with other users, activate the \"BigStar\" service";
}
}
//PRIVATE
//GETTER AND SETTER
class SuperStar extends mainData {
    private $price;
    private $internet;
    private $minute;
    function __construct()
    {
        $this->internet;
        $this->minute;
        $this->price;
    }
    /**
     * @param mixed $minute
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $internet
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
    }
    /**
     * @return mixed
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @return mixed
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
public final function show()
{
    echo "Minutes:"." ".$this->minute.'<br>';
    echo "Internet pack:"." ".$this->internet.'<br>';
    echo "Price:"." ".$this->price.'<br>';
}
public static function SuperStar(){
        echo "Super Star tariff welcoming you!!! Don't be late. Be a part of us.Use internet.Get Ahead of others!!!";
    echo "The “SuperStar” option provides the ability to use a SIM card with the current tariff as an access point to the Internet for other devices.

To use your smartphone in modem mode and share Internet traffic with other users, activate the \"SuperStar\" service";
}
}
?>
<?php
$star = new Star();
$bigStar = new BigStar();
$superStar = new SuperStar();
$db = mysqli_connect("localhost","root","","assignment7");
$sql = "SELECT * FROM tariff";
$result = $db->query($sql);
mysqli_query($db,$sql);
while ($row = mysqli_fetch_assoc($result)){
    if ($row["tname"]=="Star"){
        $star->setMinute($row["tminute"]);
        $star->setInternet($row["tinternet"]);
        $star->setPrice($row["tprice"]);
    }
    if ($row["tname"]=="BigStar"){
        $bigStar->setMinute($row["tminute"]);
        $bigStar->setInternet($row["tinternet"]);
        $bigStar->setPrice($row["tprice"]);
    }
    if ($row["tname"]=="SuperStar"){
        $superStar->setMinute($row["tminute"]);
        $superStar->setInternet($row["tinternet"]);
        $superStar->setPrice($row["tprice"]);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://rawgit.com/kenwheeler/slick/master/slick/slick.js"></script>
    <link href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet"/>
    <link href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            background-color: white;
            padding: 30px;
            text-align: center;
        }

        #navbar {
            overflow: hidden;
            background-color: white;
            box-shadow: grey;
        }

        #navbar a {
            float: left;
            display: block;
            color: rgba(92,9,251,0.7);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        #navbar a:hover {
            background-color: white;
            color: black;
        }

        #navbar a.active {
            background-color: white;
            color: rgba(92,9,251,0.7);;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }
    </style>
</head>
<body>

<div class="header">
   <center><img align="center" style="margin-top: 120px;margin-bottom: 220px" src="https://upload.wikimedia.org/wikipedia/commons/b/b6/%D0%90%D0%BB%D1%82%D0%B5%D0%BB.png">
   </center>
</div>

<div id="navbar">
    <a class="active" href="javascript:void(0)">Home</a>
    <a href="javascript:void(0)">News</a>
    <a href="javascript:void(0)">Contact</a>
    <a href="singin.php" style="float: right">Sign in <i style="color: black" class="fa fa-user-o"></i></a>
</div>

<div class="sliderContainer" >
    <div class="slider single-item">
        <img  style="height: 880px" src="https://www.bitrefill.com/content/cn/b_rgb%3Aed0890%2Cc_pad%2Ch_720%2Cw_1280/v1568906512/altel.png">
        <img style="height: 880px" src="https://www.applicantstack.com/wp-content/uploads/2018/08/application-3426397_1280.jpg">
        <img style="height: 880px" src="https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRpl2tIXKqc94FsWX2-cGLVA">
    </div>
    <div class="progressBarContainer">
        <div>

            <span data-slick-index="0" class="progressBar"></span>
        </div>
        <div>

            <span data-slick-index="1" class="progressBar"></span>
        </div>
        <div>

            <span data-slick-index="2" class="progressBar"></span>
        </div>
    </div>
</div>


<!-- Star -->
<div class="container" style="margin-top: 50%">
    <div class="row">
        <div class="column-66">
            <h1 class="xlarge-font"><b>Star</b></h1>
            <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why buy this tariff?</b></h1>
            <p><span style="font-size:36px"><?php $star->show() ?></span><br>  <?php Star::getStar() ?></p>
            <button class="button">Read More</button>
        </div>
        <div class="column-33">
            <img src="https://cdn.apk-cloud.com/detail/screenshot/q0rwRCsgwrwEJhcXurcGUCS-ycTx3YOmpGrCQn6l6ykdZqkGHtFjUwv7hnWcwTJOp-_O=h900.webp?vr" width="335" height="471">
        </div>
    </div>
</div>

<!-- Big Star -->
<div class="container" style="background-color:#f1f1f1">
    <div class="row">
        <div class="column-33">
            <img src="https://cdn.apk-cloud.com/detail/screenshot/A1TTpVfGGgnEVgwEAtlcFYe1HFoQ8L4rDgTDCW7xM25ytcjYOZk4Mf1g2vLOXxv-f0IJ=h900.webp?vr" alt="App" width="335" height="471">
        </div>
        <div class="column-66">
            <h1 class="xlarge-font"><b>Big Star</b></h1>
            <h1 class="large-font" style="color:red;"><b>Big Star, what?</b></h1>
            <p><span style="font-size:24px"><?php $bigStar->show() ?></span><br> <?php BigStar::getBigStar() ?></p>
            <button class="button" style="background-color:red">Read More</button>
        </div>
    </div>
</div>

<!-- Super Star -->
<div class="container">
    <div class="row">
        <div class="column-66">
            <h1 class="xlarge-font"><b>Super Star</b></h1>
            <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why choose this tariff?</b></h1>
            <p><span style="font-size:36px"><?php $superStar->show() ?></span><br> <?php SuperStar::SuperStar() ?></p>
            <button class="button">Read More</button>
        </div>
        <div class="column-33">
            <img src="https://cdn.apk-cloud.com/detail/screenshot/hgsWw4CK1g-06yGceOsUBM9EDO9Hcf8ZiWDagS4g2z3-spl7-Q-y6ssPW0teyKqYqQ=h900.webp?vr" width="335" height="471" >
        </div>
    </div>
</div>

<div style="float: bottom;text-align: center">
    <h2><?php echo Star::LEAVING_MESSAGE ?></h2>
</div>


<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
<script type="text/javascript">
    $(".slider").slick({
        infinite: true,
        arrows: false,
        dots: false,
        autoplay: false,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    //ticking machine
    var percentTime;
    var tick;
    var time = 1;
    var progressBarIndex = 0;

    $('.progressBarContainer .progressBar').each(function(index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        tick = setInterval(interval, 10);
    }

    function interval() {
        if (($('.slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
            progressBarIndex = $('.slider .slick-track div[aria-hidden="false"]').data("slickIndex");
            startProgressbar();
        } else {
            percentTime += 1 / (time + 5);
            $('.inProgress' + progressBarIndex).css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $('.single-item').slick('slickNext');
                progressBarIndex++;
                if (progressBarIndex > 2) {
                    progressBarIndex = 0;
                }
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $('.inProgress').css({
            width: 0 + '%'
        });
        clearInterval(tick);
    }
    startProgressbar();
    // End ticking machine

    $('.progressBarContainer div').click(function () {
        clearInterval(tick);
        var goToThisIndex = $(this).find("span").data("slickIndex");
        $('.single-item').slick('slickGoTo', goToThisIndex, false);
        startProgressbar();
    });
</script>
</body>
</html>
