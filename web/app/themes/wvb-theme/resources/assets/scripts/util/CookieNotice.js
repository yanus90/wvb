export default {
    init() {
        if (!this.checkCookieNotice()) {
            $('.cookie-notice').addClass('active');

            $('.close-cookie-notice').click(() => {
                this.setCookie('cookie-notice',  'Omnomnom', 365);
                $('.cookie-notice').removeClass('active');
            });
        }
    },
    setCookie(cname, cvalue, exdays) {
        const date = new Date();
        date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
        const expires = 'expires=' + date.toUTCString();

        document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
    },
    getCookie(cname) {
        const name = cname + '=';
        const ca = document.cookie.split(';');

        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];

            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }

            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return '';
    },
    checkCookieNotice() {
        return this.getCookie('cookie-notice') !== '';
    },
}
