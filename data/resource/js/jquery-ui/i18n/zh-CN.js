/* Chinese initialisation for the jQuery UI date picker plugin. */
/* Written by Cloudream (cloudream@gmail.com). */
jQuery(function($){
    $.datepicker.regional['zh-CN'] = {
        closeText: 'Close',
        prevText: 'Prev',
        nextText: 'Next;',
        currentText: 'Today',
        monthNames: ["January","February","March","April","May","June","July","August","September","October","November","December"],
        monthNamesShort: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
        dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],
        dayNamesMin: ["Su","Mo","Tu","We","Th","Fr","Sa"],
        dateFormat: "mm/dd/yy", firstDay: 1,
        isRTL: false};
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
});
