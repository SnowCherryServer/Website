function time() {
    window.setTimeout("time()", 1000);
    var seconds = 1000
    var minutes = seconds * 60
    var hours = minutes * 60
    var days = hours * 24
    var years = days * 365
    var today = new Date()
    var todayYear = today.getFullYear()
    var todayMonth = today.getMonth() + 1
    var todayDate = today.getDate()
    var todayHour = today.getHours()
    var todayMinute = today.getMinutes()
    var todaySecond = today.getSeconds()
    //修改这里的时间为自己的开服时间
    var t1 = Date.UTC(2019, 2, 4, 00, 00, 00)
    var t2 = Date.UTC(todayYear, todayMonth, todayDate, todayHour, todayMinute, todaySecond)
    var diff = t2 - t1
    var diffYears = Math.floor(diff / years)
    var diffDays = Math.floor((diff / days) - diffYears * 365)
    var diffHours = Math.floor((diff - (diffYears * 365 + diffDays) * days) / hours)
    var diffMinutes = Math.floor((diff - (diffYears * 365 + diffDays) * days - diffHours * hours) / minutes)
    var diffSeconds = Math.floor((diff - (diffYears * 365 + diffDays) * days - diffHours * hours - diffMinutes *
        minutes) / seconds)
        //这里可以自定义主页面显示的时间单位
    document.getElementById("time").innerHTML = diffYears + "年" + diffDays + "天" + diffHours + "小时" + diffMinutes + "分钟" + diffSeconds + "秒啦"
}
time()