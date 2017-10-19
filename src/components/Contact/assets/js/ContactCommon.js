export default {
    props: {
        horizontal: {
            type: Boolean,
            default: false
        },

        vertical: {
            type: Boolean,
            default: true
        }
    },

    data() {
        return {
            listHorizontal: false,
            listVertical: false
        };
    },

    computed: {
        contactStyles() {
            return {
                list: {
                    'contact__list--horizontal': this.listHorizontal,
                    'contact__list--vertical': this.listVertical
                }
            };
        }
    },

    mounted() {
        if (this.horizontal) {
            this.listHorizontal = true;
        } else {
            this.listVertical = true;
        }
    }
};