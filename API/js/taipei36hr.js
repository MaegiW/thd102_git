$(function(){
    $.ajax({
        url:"https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-D0047-019?Authorization=CWB-47868F1E-1E47-4065-BBA9-C2EE191989D0&format=JSON&locationName=%E5%BD%B0%E5%8C%96%E5%B8%82&elementName=T,Wx",
        type:"GET",
        dataType:"json",
        success: function(response){
            console.log(response.records)
            let path = response.records.locations[0].location[0]
            $("#city_name").html(response.records.locations[0].locationsName)
            $("#district").html(path.locationName)
            $("#tempture").html(path.weatherElement[0].time[0].elementValue[0].value + "&#176;")
            let j = 0;
            for(let i = 0; i <10; i++){
                if(i % 2 == 0){
                    let wx = path.weatherElement[1].time[i].elementValue[0].value;
                    if(wx.indexOf('晴' > -1)){
                        $(".block").eq(j).find("img").attr("src","img/sun (1).png");
                    }else if(wx.indexOf('雨') > -1){
                        $(".block").eq(j).find("img").attr("src","img/rain-black-cloud-with-raindrops-falling-down.png");
                    }else{
                        $(".block").eq(j).find("img").attr("src","img/sun.png");
                    }
                    $(".sub_tempture").eq(j).html(path.weatherElement[0].time[i].elementValue[0].value + "&#176;")
                    j++;
                }
            }
        },
        errorr: function(){
            console.log("error!")
        }
    })
})//END