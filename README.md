# askao_news_bar
**News bar plugin for wordpress en/ar**

copy askao_news_bar folder in path:
`wp-content/plugins/`

from wordpress Admin Panel Categories section:
-create a category with name and slug: newsbar

you can switch between arabic and english news bar:
from askao_news_bar.php file (english by default)
`function newsbar_getnews() {      
		include('shownewsbar_en.php'); // english newsbar
        	//include('shownewsbar_ar.php'); // arabic newsbar
	}`
