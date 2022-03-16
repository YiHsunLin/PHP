<html>
<body>
<head><center><b><font size = 7 face="Viner Hand ITC">Kenting 三日遊</font></b></center>
<meta name="keywords" content="HTML, 墾丁三日遊">
<title>墾丁三日遊表單</title>
<link rel="icon" href="/ke.ico" type="image/x-icon"/>
</head>
<style>
    html {
        height: 100%;
    }
    body {
        background-image: url(b.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }
</style>

<h1 style="color:black"><center>1.內容簡介</center></h1>
<h2 style="color:orangered"><center>&nbsp&nbsp&nbsp&nbsp日期:3/17～3/19&nbsp&nbsp&nbsp&nbsp費用:＄600</center></h2>
<h2 style="color:orangered"><center>&nbsp&nbsp&nbsp&nbsp趁著非墾丁的巔峰期，用便宜的價格帶大家到南臺灣來體驗一下異國風情，解解大家因疫情無法出國的慾望！</center></h2>

<h1 style="color:black"><center>2.行程內容</center></h1>
<h2 style="color:firebrick">&nbsp&nbsp&nbsp&nbsp第一天: 6:00開心出門，12:00 搭乘觀光接駁車繞墾丁，16:00 海邊玩水，18:30 進飯店吃晚餐，剩餘時間自由活動。</h2>
<h2 style="color:firebrick">&nbsp&nbsp&nbsp&nbsp第二天: 7:00 吃早餐，12:00 吃午餐，19:00 逛墾丁大街，空檔時間自由活動。</h2>
<h2 style="color:firebrick">&nbsp&nbsp&nbsp&nbsp第三天: 7:00 吃早餐，12:00 吃午餐，18:00 吃晚餐，平安回家，空檔時間自由活動。</h2>
<h4 style="color:red">&nbsp&nbsp&nbsp&nbsp&nbsp【※主辦方擁有更改所有行程之權利】</h4>
<?php
echo "<center><img src='1.png' /</center>>";
echo "<img src='2.png' />";
?>

<h1 style="color:black"><center>3.請填寫以下資料</center></h1>

<form action="" method=""><center>
名字:<input type="text" name="UName" placeholder="lyh" required>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp出生年月份:<input type="date" name="date" required></p>
<p>&nbsp&nbspemail:<input type="email" name="mail" required></p>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp手機號碼:<input type="text" name="tel" required></p>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp性別:Male<input type="radio" name="male">Female<input type="radio" name="female">Unknown<input type="radio" name="unknown"></p>
<p>飲食習慣:葷食<input type="checkbox" name="meat">素食<input type="checkbox" name="vegetable"></p>
<p>衣服顏色:<input type="color" name="color" required></p>
<p>衣服尺寸:
<br/><select name="t-shirt size" multiple>
<option>XS</option>
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>
<option>2XL</option>
<option>3XL</option>
<option>4XL</option>
</select></p>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp衣服尺寸對照表<table border="2"> 
<tr><th></th><th>XS</th><th>S</th><th>M</th><th>L</th><th>XL</th><th>2XL</th><th>3XL</th><th>4XL</th></tr>
<tr><td>衣長</td><td>62</td><td>64</td><td>67</td><td>71</td><td>73</td><td>76</td><td>78</td><td>81</td></tr>
<tr><td>衣寬</td><td>41</td><td>44</td><td>48</td><td>51</td><td>54</td><td>58</td><td>63</td><td>66</td></tr>
<tr><td>袖長</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>24</td><td>25</td><td>28</td></tr>
<tr><td>肩寬</td><td>40</td><td>42</td><td>43</td><td>45</td><td>48</td><td>50</td><td>52</td><td>54</td></tr>
</table></p>
備註:
<br>
<p><textarea name="comments" rows="5" cols="30">留言:</textarea></p>
<p><input type="submit" value="送出"></p>
</center></form>

<div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://bunnyann.com/kentingplay/" target="new">相關資訊</a>
、
<a href="https://www.kkday.com/zh-tw/city/kenting" target="new">墾丁旅遊懶人包</a>
、
<a href="https://www.ktnp.gov.tw/" target="new">墾丁國家公園</a>
</div>

</body>
</html>