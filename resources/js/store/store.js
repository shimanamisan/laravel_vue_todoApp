import Vue from "vue";
import Vuex from "vuex";
import auth from "./auth";
import taskStore from "./taskStore";
import error from "./error";
import contact from "./contact";

// Vuexを使うよという宣言
Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        auth,
        taskStore,
        error,
        contact
    }
});
