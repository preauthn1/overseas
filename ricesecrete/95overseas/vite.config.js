import vue from '@vitejs/plugin-vue'
import {defineConfig, loadEnv} from 'vite'
import compression from 'vite-plugin-compression';
import path from 'path'
// https://vitejs.dev/config/
export default defineConfig(({mode, command}) => {
    const env = loadEnv(mode, process.cwd())
    const {VITE_APP_ENV} = env
    return {
        // 部署生产环境和开发环境下的URL。
        // 默认情况下，vite 会假设你的应用是被部署在一个域名的根路径上
        // 例如 https://www.ruoyi.vip/。如果应用被部署在一个子路径上，你就需要用这个选项指定这个子路径。例如，如果你的应用被部署在 https://www.ruoyi.vip/admin/，则设置 baseUrl 为 /admin/。
        base: VITE_APP_ENV === 'production' ? '/' : '/',
        plugins: [
            vue(),
            // 其他插件...
            compression({
                algorithm: "gzip", // 指定压缩算法为gzip,[ 'gzip' , 'brotliCompress' ,'deflate' , 'deflateRaw']
                ext: ".gz", // 指定压缩后的文件扩展名为.gz
                threshold: 10240, // 仅对文件大小大于threshold的文件进行压缩，默认为10KB
                deleteOriginFile: false, // 是否删除原始文件，默认为false
                filter: /\.(js|css|json|html|ico|svg)(\?.*)?$/i, // 匹配要压缩的文件的正则表达式，默认为匹配.js、.css、.json、.html、.ico和.svg文件
                compressionOptions: {level: 9}, // 指定gzip压缩级别，默认为9（最高级别）
                verbose: true, //是否在控制台输出压缩结果
                disable: false, //是否禁用插件
            })
        ],
        resolve: {
            // https://cn.vitejs.dev/config/#resolve-alias
            alias: {
                // 设置路径
                '~': path.resolve(__dirname, './'),
                // 设置别名
                '@': path.resolve(__dirname, './src')
            },
            // https://cn.vitejs.dev/config/#resolve-extensions
            extensions: ['.mjs', '.js', '.ts', '.jsx', '.tsx', '.json', '.vue']
        },
        // vite 相关配置
        server: {
            port: 80,
            host: true,
            open: true,
            proxy: {
                // https://cn.vitejs.dev/config/#server-proxy
                // '/dev-api': {
                //   target: 'http://localhost:8080',
                //   changeOrigin: true,
                //   rewrite: (p) => p.replace(/^\/dev-api/, '')
                // }
            }
        },
        build: {
            minify: 'terser', // 启用 terser 压缩
            terserOptions: {
                compress: {
                    // pure_funcs: ['console.log'],
                    drop_console: true, // 删除所有 console
                    drop_debugger: true, // 删除 debugger
                }
            }
        }
    }
})

