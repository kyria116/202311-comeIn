$(function () {
    var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]
    $(document).ready(function () {
        $('.selectBox select').on('change', function () {
            $(this).css('color', '#221e1f')
        });
        var option = '<option value="day">日</option>';
        var selectedDay = "day";
        for (var i = 1; i <= Days[0]; i++) { //add option days
            option += '<option value="' + i + '">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);

        var option = '<option value="month">月</option>';
        var selectedMon = "month";
        for (var i = 1; i <= 12; i++) {
            option += '<option value="' + i + '">' + i + '</option>';
        }
        $('#month').append(option);
        $('#month').val(selectedMon);
        var d = new Date();
        var option = '<option value="year">年</option>';
        selectedYear = "year";
        for (var i = 1930; i <= d.getFullYear(); i++) { // years start i
            option += '<option value="' + i + '">' + i + '</option>';
        }
        $('#year').append(option);
        $('#year').val(selectedYear);
    });

    function change_year(select) {
        if (isLeapYear($(select).val())) {
            Days[1] = 29;
        } else {
            Days[1] = 28;
        }
        if ($("#month").val() == 2) {
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option value="day">日</option>';
            for (var i = 1; i <= Days[1]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $(day).append(option);
            if (val > Days[month]) {
                val = 1;
            }
            $(day).val(val);
        }
    }

    function change_month(select) {
        var day = $('#day');
        var val = $(day).val();
        $(day).empty();
        var option = '<option value="day">日</option>';
        var month = parseInt($(select).val()) - 1;
        for (var i = 1; i <= Days[month]; i++) { //add option days
            option += '<option value="' + i + '">' + i + '</option>';
        }
        $(day).append(option);
        if (val > Days[month]) {
            val = 1;
        }
        $(day).val(val);
    }

    function Captcha(params = {}) {
        let middleParams = Object.assign({
            lineWidth: 0.5,
            lineNum: 2,
            dotR: 0,
            dotNum: 0,
            preGroundColor: [0, 0],
            backGroundColor: [255, 255],
            fontSize: 30,
            fontFamily: ['Arial'],
            fontStyle: 'fill',
            content: '012345789',
            length: 4
        }, params);
        Object.keys(middleParams).forEach(item => {
            this[item] = middleParams[item]
        });
        this.canvas = null;
        this.paint = null
    };
    Captcha.prototype.getRandom = function (...arr) {
        arr.sort((a, b) => a - b);
        return Math.floor(Math.random() * (arr[1] - arr[0]) + arr[0])
    };
    Captcha.prototype.getColor = function (arr) {
        let colors = new Array(3).fill('');
        colors = colors.map(item => this.getRandom(...arr));
        return colors
    };
    Captcha.prototype.getText = function () {
        let length = this.content.length;
        let str = '';
        for (let i = 0; i < this.length; i++) {
            str += this.content[this.getRandom(0, length)]
        }
        return str
    };
    Captcha.prototype.line = function () {
        for (let i = 0; i < this.lineNum; i++) {
            let x = this.getRandom(0, this.canvas.width);
            let y = this.getRandom(0, this.canvas.height);
            let endX = this.getRandom(0, this.canvas.width);
            let endY = this.getRandom(0, this.canvas.height);
            this.paint.beginPath();
            this.paint.lineWidth = this.lineWidth;
            let colors = this.getColor(this.preGroundColor);
            this.paint.strokeStyle = 'rgba(' + colors[0] + ',' + colors[1] + ',' + colors[2] + ',' + '0.8)';
            this.paint.moveTo(x, y);
            this.paint.lineTo(endX, endY);
            this.paint.closePath();
            this.paint.stroke()
        }
    };
    Captcha.prototype.circle = function () {
        for (let i = 0; i < this.dotNum; i++) {
            let x = this.getRandom(0, this.canvas.width);
            let y = this.getRandom(0, this.canvas.height);
            this.paint.beginPath();
            this.paint.arc(x, y, this.dotR, 0, Math.PI * 2, false);
            this.paint.closePath();
            let colors = this.getColor(this.preGroundColor);
            this.paint.fillStyle = 'rgba(' + colors[0] + ',' + colors[1] + ',' + colors[2] + ',' + '0.8)';
            this.paint.fill()
        }
    };
    Captcha.prototype.font = function () {
        let str = this.getText();
        this.callback(str);
        this.paint.font = this.fontSize + 'px ' + this.fontFamily[this.getRandom(0, this.fontFamily.length)];
        this.paint.textBaseline = 'middle';
        let fontStyle = this.fontStyle + 'Text';
        let colorStyle = this.fontStyle + 'Style';
        for (let i = 0; i < this.length; i++) {
            let fontWidth = this.paint.measureText(str[i]).width;
            let x = this.getRandom(this.canvas.width / this.length * i + 0.2 * fontWidth, (this.canvas.width / this.length) * i + 0.5 * fontWidth);
            let deg = this.getRandom(-6, 6);
            let colors = this.getColor(this.preGroundColor);
            this.paint[colorStyle] = 'rgba(' + colors[0] + ',' + colors[1] + ',' + colors[2] + ',' + '0.8)';
            this.paint.save();
            this.paint.rotate(deg * Math.PI / 180);
            this.paint[fontStyle](str[i], x, this.canvas.height / 2);
            this.paint.restore()
        }
    };
    Captcha.prototype.draw = function (dom, callback = function () {}) {
        if (!this.paint) {
            this.canvas = dom;
            if (!this.canvas) return;
            else this.paint = this.canvas.getContext('2d');
            this.callback = callback;
            this.canvas.onclick = () => {
                this.drawAgain()
            }
        }
        let colors = this.getColor(this.backGroundColor);
        this.paint.fillStyle = 'rgba(' + colors[0] + ',' + colors[1] + ',' + colors[2] + ',' + '0.8)';
        this.paint.fillRect(0, 0, this.canvas.width, this.canvas.height);
        this.circle();
        this.line();
        this.font()
    };
    Captcha.prototype.clear = function () {
        this.paint.clearRect(0, 0, this.canvas.width, this.canvas.height)
    };
    Captcha.prototype.drawAgain = function () {
        this.clear();
        this.draw(this.callbak)
    };
    if (typeof module !== 'undefined' && !module.nodeType && module.exports) {
        module.exports = Captcha
    }

    

    let captcha = new Captcha();
    captcha.draw(document.querySelector('#captcha'), r => {
        console.log(r);
    });
    $('.refreshBtn').on('click', function () {
        $('#captcha').click()
    });
});