<template>
    <div class="l-wrapper l-wrapper__resetPass">
        <section class="l-main__auth">
            <div class="c-logo__header">
                <router-link to="/">
                    <CommonLogo />
                </router-link>
            </div>
            <div class="l-card__container">
                <div class="p-card__container">
                    <p class="p-card__title">パスワード再設定</p>
                </div>
                <hr class="u-form__line" />
                <div class="c-form__container">
                    <form @submit.prevent>
                        <div class="c-form__item">
                            <label for class="c-form-lavel"
                                >メールアドレス</label
                            >

                            <input
                                type="text"
                                class="c-input"
                                v-model="form.email"
                                :class="{ 'c-error__bg': validEmail }"
                            />
                            <!-- バリデーションエラー -->
                            <div
                                v-if="resetPasswordErrorMessages"
                                class="c-error"
                            >
                                <ul v-if="resetPasswordErrorMessages.email">
                                    <li
                                        v-for="msg in resetPasswordErrorMessages.email"
                                        :key="msg"
                                    >
                                        {{ msg }}
                                    </li>
                                </ul>
                            </div>
                            <!-- end errors -->
                        </div>
                        <div class="c-form__item">
                            <label for class="c-form-lavel">パスワード</label>
                            <input
                                type="password"
                                class="c-input"
                                v-model="form.password"
                                :class="{ 'c-error__bg': validPassword }"
                            />
                            <!-- バリデーションエラー -->
                            <div
                                v-if="resetPasswordErrorMessages"
                                class="c-error"
                            >
                                <ul v-if="resetPasswordErrorMessages.password">
                                    <li
                                        v-for="msg in resetPasswordErrorMessages.password"
                                        :key="msg"
                                    >
                                        {{ msg }}
                                    </li>
                                </ul>
                            </div>
                            <!-- end errors -->
                        </div>
                        <div class="c-form__item">
                            <label for class="c-form-lavel"
                                >パスワード再入力</label
                            >
                            <input
                                type="password"
                                class="c-input"
                                v-model="form.password_confirmation"
                            />
                        </div>
                    </form>
                    <div class="c-form__action c-form__action__item">
                        <button
                            class="c-btn c-btn__signin"
                            @click="resetPassword"
                        >
                            パスワードをリセット
                        </button>
                    </div>
                </div>
            </div>
            <!-- l-card__container -->
        </section>
        <!-- l-main__auth -->
    </div>
    <!-- l-wrapper__login -->
</template>
<script>
import CommonLogo from "../common/CommonLogo";
import { OK } from "../../statusCode";
import { mapState, mapGetters } from "vuex";
export default {
    data() {
        return {
            form: {
                email: "",
                password: "",
                password_confirmation: "",
                token: "",
            },
        };
    },
    components: {
        CommonLogo,
    },
    computed: {
        ...mapState({
            apiStatus: (state) => state.auth.apiStatus,
            resetPasswordErrorMessages: (state) =>
                state.auth.resetPasswordErrorMessages,
        }),
        ...mapGetters({
            isLogin: "auth/check",
            getCode: "error/getCode",
            validEmail: "auth/validResetPasswordErrorMessagesForEmail",
            validPassword: "auth/validResetPasswordErrorMessagesForPassword",
        }),
    },
    methods: {
        async resetPassword() {
            await this.$store.dispatch("auth/resetPassword", this.form);
            if (this.getCode === OK) {
                this.$router.push("/login");
            }
        },
        setQuery() {
            // パスワードリセットするために必要なToken
            this.form.token = this.$route.query.token || "";
        },
    },
    created() {
        this.setQuery();
    },
};
</script>
<style></style>
