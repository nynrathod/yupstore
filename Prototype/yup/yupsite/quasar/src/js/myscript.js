export default {
    computed: {
        is_xs () {
            const isMobile = window.matchMedia("only screen and (max-width: 599px)")
            return isMobile.matches ? true : false
        },
        is_sm () {
            const isMobile = window.matchMedia("only screen and (max-width: 1023px)")
            return isMobile.matches ? true : false
        },
        is_lt_xs () {
            const isMobile = window.matchMedia("only screen and (max-width: 599px)")
            return isMobile.matches ? true : false
        },
        is_lt_sm () {
            const isMobile = window.matchMedia("only screen and (max-width: 1023px)")
            return isMobile.matches ? true : false
        },
        is_lt_md () {
            const isMobile = window.matchMedia("only screen and (max-width: 1439px)")
            return isMobile.matches ? true : false
        },
        is_lt_lg () {
            const isMobile = window.matchMedia("only screen and (max-width: 1919px)")
            return isMobile.matches ? true : false
        },
        is_gt_xs () {
            const isMobile = window.matchMedia("only screen and (min-width: 600px)")
            return isMobile.matches ? true : false
        },
        is_gt_sm () {
            const isMobile = window.matchMedia("only screen and (min-width: 1024px)")
            return isMobile.matches ? true : false
        },
        is_gt_md () {
            const isMobile = window.matchMedia("only screen and (min-width: 1440px)")
            return isMobile.matches ? true : false
        },
        is_gt_lg () {
            const isMobile = window.matchMedia("only screen and (min-width: 1920px)")
            return isMobile.matches ? true : false
        },
    }
}