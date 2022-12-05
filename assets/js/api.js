

var url = 'https://newsapi.org/v2/top-headlines?country=tr&apiKey=538580b6dd0f4ddcb9a2f195a94ebf3b'

    var req = new Request(url);
    var news = document.getElementById('news')
    var news2 = document.getElementById('news2_title')
    //var news2_url= document.getElementById('news2_url')
    var news2_publish = document.getElementById('news2_publish')
    var news2_image = document.getElementById('news2_image')
    var news3 = document.getElementById('news3')
    var news3_image = document.getElementById('news3_image')
    var news4 = document.getElementById('news4')
    var news4_image = document.getElementById('news4_image')
    var news5 = document.getElementById('news5')
    var news5_image = document.getElementById('news5_image')
    var news6 = document.getElementById('news6')
    var news6_image = document.getElementById('news6_image')
    var news6_description = document.getElementById('news6_description')
    var news7 = document.getElementById('news7')
    var news7_image = document.getElementById('news7_image')
    var news7_description = document.getElementById('news7_description')
    var news8 = document.getElementById('news8')
    var news8_image = document.getElementById('news8_image')
    var news8_description = document.getElementById('news8_description')
    var news9 = document.getElementById('news9')
    var news9_image = document.getElementById('news9_image')
    var news9_description = document.getElementById('news9_description')

    fetch(req)
      .then(async response => {
        const jsonData = await response.json();
        console.log(jsonData)
        news.innerHTML = jsonData.articles[0].title
        news2.innerHTML = jsonData.articles[1].title
        news2_publish.innerHTML = jsonData.articles[1].publishedAt
        //news2_url.innerHTML=jsonData.articles[1].url
        news2_image.src = jsonData.articles[1].urlToImage
        news3.innerHTML = jsonData.articles[2].title
        news3_image.src = jsonData.articles[2].urlToImage
        news4.innerHTML = jsonData.articles[3].title
        news4_image.src = jsonData.articles[3].urlToImage
        news5.innerHTML = jsonData.articles[4].title
        news5_image.src = jsonData.articles[4].urlToImage
        news6.innerHTML = jsonData.articles[5].title
        news6_image.src = jsonData.articles[5].urlToImage
        news6_description.innerHTML = jsonData.articles[5].description
        news7.innerHTML = jsonData.articles[6].title
        news7_image.src = jsonData.articles[6].urlToImage
        news7_description.innerHTML = jsonData.articles[6].description
        news8.innerHTML = jsonData.articles[7].title
        news8_image.src = jsonData.articles[7].urlToImage
        news8_description.innerHTML = jsonData.articles[7].description
        news9.innerHTML = jsonData.articles[8].title
        news9_image.src = jsonData.articles[8].urlToImage
        news9_description.innerHTML = jsonData.articles[8].description

      })
      var tarih = new Date();
      var yil = tarih.getFullYear();
      var ay = tarih.getMonth() + 1;
      var gun = tarih.getDate();
      var saat = tarih.getHours();
      var dakika = tarih.getMinutes();
      var tarih = gun + "/" + ay + "/" + yil + " " + saat + ":" + dakika ;
      document.getElementById("tarih").innerHTML = tarih;

