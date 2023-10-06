function initMap() {
    map = document.getElementById("map");//map.blade.phpの<div id="map">と<div>に囲まれた部分を代入
    let tokyoTower = {lat: 38.6585769, lng: 135.7454506};//東京タワーの緯度経度を設定
    opt = {zoom: 5,center: tokyoTower,};//初期設定：13のズーム度合、上記の位置の東京タワーを中心にする　　
    mapObj = new google.maps.Map(map, opt);//mapとoptを初期設定にしたグーグルマップインスタンスを生成
    
    //let 店の名前 = {緯度,軽度};で場所を定義
    let 田舎館駅 = {lat:40.63720278160614, lng:140.57089387609335};
    let かねちゃん = {lat:40.630404287231606, lng:140.5501646618432};
    let 創作料理御幸 = {lat:40.64502680585057, lng:140.5965317321646};
    let 青森県田舎館村 = {lat:40.63565998460352, lng:140.549629632643};
    let 食処ふじた = {lat:40.63560361263662, lng:140.58183990240312};
    let 鳥文食堂 = {lat:40.635989167830424, lng:140.52137338010223};
    let 長崎県五島列島= {lat:32.69907614111379, lng:128.77157657869896};
    let 平安食堂 = {lat:32.694787715357535, lng:128.8487315540369};
    let 一登 = {lat:32.69608434846324, lng:128.84188308794677};
    let ビッグヒライパワーセンター店 = {lat:32.688524584624744, lng:128.8090480800143};
    let 鬼岳 = {lat:32.66278090682991, lng:128.85176524881234};
    let 奥浦海鮮直売所 = {lat:32.75573355488959, lng:128.82758411688016};
    let 沖島漁業会館 = {lat:35.20102540822532, lng:136.056340143211};
    let 汀の精 = {lat:35.20340642769039, lng:136.06069106202517};
    let 沖島小学校 = {lat:35.20477316997397, lng:136.06044974281807};
    let いっぷくどう = {lat:35.20173709892477, lng:136.05466029791316};
    let 頴娃駅 = {lat:31.229105519081827, lng:130.50041058984615};
    let 招福そば = {lat:31.252248153880803, lng:130.4922629598245};
    let ばあば亭 = {lat:31.251497939160807, lng:130.491116246698};
    let えい中央温泉センター = {lat:31.239562148651228, lng:130.49537737622927};
    let 居酒屋勇気凛々 = {lat:31.234334925692483, lng:130.5050697792982};
    let 大寅屋 = {lat:33.55805981832963, lng:131.43818956730547};
    let 昭和の町 = {lat:33.558103065474114, lng:131.4385496207394};
    let カフェカシュカシュ = {lat:33.55917986079014, lng:131.43903359004673};
    let 禄剛崎 = {lat:37.52891194019288, lng:137.32633643958556};
    let いかなてて = {lat:37.526340543189036, lng:137.32515666242858};
    let 石川県珠洲市狼煙町 = {lat:37.51649540572653, lng:137.31431890205346};
    let つばき茶屋 = {lat:37.52548250264439, lng:137.2579465765311};
    let ゴジラ岩 = {lat:37.50304421250424, lng:137.18783023791275};
    let 平家の里 = {lat:37.50190436349402, lng:137.1620142832029};
    let 長野県高山村 = {lat:36.6542937057811, lng:138.42612320613998};
    let 子安そば文の蔵 = {lat:36.67393456355097, lng:138.38917042709957};
    let 藤田屋酒店 = {lat:36.67712437041944, lng:138.38154109122684};
    let 山田温泉大湯 = {lat:36.67066515270921, lng:138.42485412246006};
    let 食彩酒房鼓 = {lat:36.67913527687212, lng:138.36218077436445};
    let 宝亭 = {lat:33.12891252828721, lng:139.80301339467144};
    let 裏見ヶ滝温泉 = {lat:33.063518116589414, lng:139.8167194654569};
    let 伊計ビーチ = {lat:26.387890263844252, lng:127.99148671213021};
    let 沖縄県うるま市浜比嘉島 = {lat:26.320737044033233, lng:127.95793764297915};
    let エスパシオ = {lat:26.355981245847154, lng:127.97039355346429};
    let 沖縄県うるま市宮城島 = {lat:26.367275152228956, lng:127.98043620440454};
    let さるふつ丸ごと館 = {lat:45.32882205431123, lng:142.17594686398667};
    let 北海道猿払村 = {lat:45.32741968438446, lng:142.10513881797908};
    let 円丁牧場 = {lat:45.279196250721306, lng:142.15858730221555};
    let 三重県鳥羽市答志島 = {lat:34.52044904470878, lng:136.88097213382923};
    let まるみつ寿司 = {lat:34.523724824207015, lng:136.89772637220372};
    let 御食事処はましん= {lat:34.73475276319706, lng:134.2742170809497};
    let とんかつかつ平= {lat:34.73394022946729, lng:134.27259629039207};
    let CAFERAD= {lat:34.7316453056512, lng:134.27561923890656};
    let きたろう = {lat:34.733839779228205, lng:134.27333724142449};
    let たぬき山展望台 = {lat:34.70074490213606, lng:134.28790518010737};
    
    //マーカーを生成。
    marker = new google.maps.Marker({position: 田舎館駅,//８行目の田舎館村の位置に
            map: mapObj,//mapObjというmapの上に
            title: '田舎館駅',//ホバーしたときに田舎館村と表示するように
    });
    
    //マーカーをクリックしたら、マップ詳細画面に移動。
    marker.addListener("click", () => {
         window.location.href = '/maps/1';
    });
    
    marker = new google.maps.Marker({position: かねちゃん,
            map: mapObj,
            title: 'かねちゃん',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/2';
    });
    
    marker = new google.maps.Marker({position: 創作料理御幸,
            map: mapObj,
            title: '創作料理御幸',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/3';
    });
    
    marker = new google.maps.Marker({position: 青森県田舎館村,
            map: mapObj,
            title: '青森県田舎館村',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/4';
    });
    
    marker = new google.maps.Marker({position: 食処ふじた,
            map: mapObj,
            title: '食処ふじた',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/5';
    });
    
    marker = new google.maps.Marker({position: 鳥文食堂,
            map: mapObj,
            title: '鳥文食堂',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/6';
    });
    
    marker = new google.maps.Marker({position: 長崎県五島列島,
            map: mapObj,
            title: '長崎県五島列島',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/7';
    });
    
    marker = new google.maps.Marker({position: 平安食堂,
            map: mapObj,
            title: '平安食堂',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/8';
    });
    
    marker = new google.maps.Marker({position: 一登,
            map: mapObj,
            title: '一登',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/9';
    });
    
    marker = new google.maps.Marker({position: ビッグヒライパワーセンター店,
            map: mapObj,
            title: 'ビッグヒライパワーセンター店',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/10';
    });
    
    marker = new google.maps.Marker({position: 鬼岳,
            map: mapObj,
            title: '鬼岳',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/11';
    });
    
    marker = new google.maps.Marker({position: 奥浦海鮮直売所,
            map: mapObj,
            title: '奥浦海鮮直売所',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/12';
    });
    
    marker = new google.maps.Marker({position: 沖島漁業会館,
            map: mapObj,
            title: '沖島漁業会館',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/13';
    });
    
    marker = new google.maps.Marker({position: 汀の精,
            map: mapObj,
            title: '汀の精',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/14';
    });
    
    marker = new google.maps.Marker({position: 沖島小学校,
            map: mapObj,
            title: '沖島小学校',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/15';
    });
    
    marker = new google.maps.Marker({position: いっぷくどう,
            map: mapObj,
            title: 'いっぷくどう',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/16';
    });
    
    marker = new google.maps.Marker({position: 頴娃駅,
            map: mapObj,
            title: '頴娃駅',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/17';
    });
    
    marker = new google.maps.Marker({position: 招福そば,
            map: mapObj,
            title: '招福そば',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/18';
    });
    
    marker = new google.maps.Marker({position: ばあば亭,
            map: mapObj,
            title: 'ばあば亭',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/19';
    });
    
    marker = new google.maps.Marker({position: えい中央温泉センター,
            map: mapObj,
            title: 'えい中央温泉センター',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/20';
    });
    
    marker = new google.maps.Marker({position: 居酒屋勇気凛々,
            map: mapObj,
            title: '居酒屋勇気凛々',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/21';
    });
    
    marker = new google.maps.Marker({position: 大寅屋,
            map: mapObj,
            title: '大寅屋',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/22';
    });
    
    marker = new google.maps.Marker({position: 昭和の町,
            map: mapObj,
            title: '昭和の町',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/23';
    });
    
    marker = new google.maps.Marker({position: カフェカシュカシュ,
            map: mapObj,
            title: 'カフェカシュカシュ',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/24';
    });
    
    marker = new google.maps.Marker({position: 禄剛崎,
            map: mapObj,
            title: '禄剛崎',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/25';
    });
    
    marker = new google.maps.Marker({position: いかなてて,
            map: mapObj,
            title: 'いかなてて',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/26';
    });
    
    marker = new google.maps.Marker({position: 石川県珠洲市狼煙町,
            map: mapObj,
            title: '石川県珠洲市狼煙町',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/27';
    });
    marker = new google.maps.Marker({position: つばき茶屋,
            map: mapObj,
            title: 'つばき茶屋',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/28';
    });
    
    marker = new google.maps.Marker({position: ゴジラ岩,
            map: mapObj,
            title: 'ゴジラ岩',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/29';
    });
    
    marker = new google.maps.Marker({position: 平家の里,
            map: mapObj,
            title: '平家の里',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/30';
    });
    
    marker = new google.maps.Marker({position: 長野県高山村,
            map: mapObj,
            title: '長野県高山村',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/31';
    });
    
    marker = new google.maps.Marker({position: 子安そば文の蔵,
            map: mapObj,
            title: '子安そば文の蔵',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/32';
    });
    
    marker = new google.maps.Marker({position: 藤田屋酒店,
            map: mapObj,
            title: '藤田屋酒店',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/33';
    });
    
    marker = new google.maps.Marker({position: 山田温泉大湯,
            map: mapObj,
            title: '山田温泉大湯',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/34';
    });
    
    marker = new google.maps.Marker({position: 食彩酒房鼓,
            map: mapObj,
            title: '食彩酒房鼓',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/35';
    });
    
    marker = new google.maps.Marker({position: 宝亭,
            map: mapObj,
            title: '宝亭',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/36';
    });
    
    marker = new google.maps.Marker({position: 裏見ヶ滝温泉,
            map: mapObj,
            title: '裏見ヶ滝温泉',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/37';
    });
    
    marker = new google.maps.Marker({position: 伊計ビーチ,
            map: mapObj,
            title: '伊計ビーチ',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/38';
    });
    
    marker = new google.maps.Marker({position: 沖縄県うるま市浜比嘉島,
            map: mapObj,
            title: '沖縄県うるま市浜比嘉島',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/39';
    });
    
    marker = new google.maps.Marker({position: エスパシオ,
            map: mapObj,
            title: 'エスパシオ',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/40';
    });
    
    marker = new google.maps.Marker({position: 沖縄県うるま市宮城島,
            map: mapObj,
            title: '沖縄県うるま市宮城島',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/41';
    });
    
    marker = new google.maps.Marker({position: さるふつ丸ごと館,
            map: mapObj,
            title: 'さるふつ丸ごと館',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/42';
    });
    
    marker = new google.maps.Marker({position: 北海道猿払村,
            map: mapObj,
            title: '北海道猿払村',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/43';
    });
    
    marker = new google.maps.Marker({position: 円丁牧場,
            map: mapObj,
            title: '円丁牧場',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/44';
    });
    
    marker = new google.maps.Marker({position: 三重県鳥羽市答志島,
            map: mapObj,
            title: '三重県鳥羽市答志島',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/45';
    });
    
    marker = new google.maps.Marker({position: まるみつ寿司,
            map: mapObj,
            title: 'まるみつ寿司',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/46';
    });
    
    marker = new google.maps.Marker({position: 御食事処はましん,
            map: mapObj,
            title: '御食事処はましん',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/47';
    });
    
    marker = new google.maps.Marker({position: とんかつかつ平,
            map: mapObj,
            title: 'とんかつかつ平',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/48';
    });
    
    marker = new google.maps.Marker({position: CAFERAD,
            map: mapObj,
            title: 'CAFERAD',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/49';
    });
    
    marker = new google.maps.Marker({position: きたろう,
            map: mapObj,
            title: 'きたろう',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/50';
    });
    
    marker = new google.maps.Marker({position: たぬき山展望台,
            map: mapObj,
            title: 'たぬき山展望台 ',
    });
    
    marker.addListener("click", () => {
         window.location.href = '/maps/51';
    });
}