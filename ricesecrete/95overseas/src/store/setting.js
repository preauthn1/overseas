/**
 * @name: setting
 * @author: 89254
 * @date: 2024-06-26 19:25
 * @description：setting
 * @update: 2024-06-26 19:25
 */
import { defineStore } from 'pinia'
const useSettingStore = defineStore('setting',{
    state: () => ({
        openMenu: false,
    }),
    getters: {
        getOpenMenu() {
            return this.openMenu;
        }
    },
    actions: {
        setOpenMenu() {
            this.openMenu = !this.openMenu;
        }
    },
})
export default useSettingStore
