import './bootstrap';
import $ from "cash-dom";
import flatpickr from 'flatpickr';

$(function () {
    function initDateTimeComps ()
    {
        flatpickr($('.date-time'));
    }

    window.initDateTimeComps = initDateTimeComps;
    initDateTimeComps();
});

