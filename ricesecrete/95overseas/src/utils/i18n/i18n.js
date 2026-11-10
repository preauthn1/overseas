// i18n.js
import { createI18n } from 'vue-i18n';

const messages = {
    en: {
        message: {
            hello: 'hello world'
        }
    },
    fr: {
        message: {
            hello: 'Bonjour le monde'
        }
    }
};

const i18n = createI18n({
    locale: 'en', // set default locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
});

export default i18n;
