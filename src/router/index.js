import {createRouter, createWebHashHistory} from "vue-router"

export default createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            name: 'main',
            path: '/',
            component: () => import('../views/Main.vue'),
            meta: {
                footer: {
                    align: "end"
                },
                header: {
                    format: "guest"
                }
            }
        },
        {
            name: 'login',
            path: '/login',
            component: () => import('../views/Login.vue'),
            meta: {
                footer: {
                    align: "center"
                },
                header: {
                    format: "compact"
                }
            }
        },
        {
            name: 'registration',
            path: '/registration',
            component: () => import('../views/Register.vue'),
            meta: {
                footer: {
                    align: "center"
                },
                header: {
                    format: "compact"
                }
            }
        },
        {
            name: 'profile',
            path: '/profile',
            component: () => import('../views/Profile.vue'),
            meta: {
                footer: {
                    align: "center"
                },
                header: {
                    format: "profile"
                }
            },
            children: [
                {
                    name: 'gift',
                    path: 'gift',
                    component: () => import('../components/profile/GiftTable.vue'),
                    meta: {
                        footer: {
                            align: "center"
                        },
                        header: {
                            format: "profile"
                        }
                    },
                },
                {
                    name: 'event',
                    path: 'event',
                    component: () => import('../components/profile/EventTable.vue'),
                    meta: {
                        footer: {
                            align: "center"
                        },
                        header: {
                            format: "profile"
                        }
                    },
                },
                {
                    name: 'group',
                    path: 'group',
                    component: () => import('../components/profile/GroupTable.vue'),
                    meta: {
                        footer: {
                            align: "center"
                        },
                        header: {
                            format: "profile"
                        }
                    },
                },
            ]
        },
    ],
})