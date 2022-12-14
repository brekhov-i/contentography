const mix = require("laravel-mix");
const CopyWebpackPlugin = require("copy-webpack-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
require("laravel-mix-webp");
let productionSourceMaps = process.env.NODE_ENV === "development";

mix
  .sass("./assets/scss/style.scss", "./css/style.css")
  .sass("./assets/scss/editor-style.scss", "./css/editor-style.css")
  .sass("./assets/scss/main.scss", "./css/main.css")
  .js("./assets/js/main.js", "./js/main.js")

  //================= FrontPage =================
  .sass("./assets/scss/pages/frontPage.scss", "./css/pages/frontPage.css")
  .js("./assets/js/pages/frontPage.js", "./js/pages/frontPage.js")
  .vue({ version: 3 })

  //==================== 404 ====================
  .sass("./assets/scss/pages/404.scss", "./css/pages/404.css")

  //================== Archive P ================
  .sass("./assets/scss/pages/archive-p.scss", "./css/pages/archive-p.css")

  //==================== Home ===================
  .sass("./assets/scss/pages/home.scss", "./css/pages/home.css")

  //================== Graduates ================
  .sass("./assets/scss/pages/graduates.scss", "./css/pages/graduates.css")
  .js("./assets/js/pages/graduates.js", "./js/pages/graduates.js")
  .vue({ version: 3 })

  //==================== AboutUs ================
  .sass("./assets/scss/pages/aboutUs.scss", "./css/pages/aboutUs.css")

  //=================== Kontakty ================
  .sass("./assets/scss/pages/contacts.scss", "./css/pages/contacts.css")

  //====================== FAQ ==================
  .sass("./assets/scss/pages/faq.scss", "./css/pages/faq.css")

  //===================== Experts ===============
  .sass("./assets/scss/pages/experts.scss", "./css/pages/experts.css")

  //================= stanAvtorom ===============
  .sass("./assets/scss/pages/stanAvtorom.scss", "./css/pages/stanAvtorom.css")

  //================= thanksEmail ===============
  .sass("./assets/scss/pages/thanksEmail.scss", "./css/pages/thanksEmail.css")

  //=============== Single Post =================
  .sass("./assets/scss/pages/single.scss", "./css/pages/page-post.css")
  .sass("./assets/scss/pages/singular.scss", "./css/pages/page-post.css")

  //==================== Courses ================
  //================== NewYear ==================
  .sass("./assets/scss/courses/newYear.scss", "./css/courses/newYear.css")
  .js("./assets/js/pages/newYear.js", "./js/courses/newYear.js").vue({version: 3})
  //============== 3-light-schemes ==============
  .sass(
    "./assets/scss/courses/3-light-schemes.scss",
    "./css/courses/3-light-schemes.css"
  )
  //================ artPortret =================
  .sass("./assets/scss/courses/artPortret.scss", "./css/courses/artPortret.css")
  //============ beginnerPhotograph =============
  .sass(
    "./assets/scss/courses/beginnerPhotograph.scss",
    "./css/courses/beginnerPhotograph.css"
  )
  //=============== blackFriday =================
  .sass(
    "./assets/scss/courses/blackFriday.scss",
    "./css/courses/blackFriday.css"
  )
  //============== complexLight =================
  .sass(
    "./assets/scss/courses/complexLight.scss",
    "./css/courses/complexLight.css"
  )
  //============= creativeShooting ==============
  .sass(
    "./assets/scss/courses/creativeShooting.scss",
    "./css/courses/creativeShooting.css"
  )
  //============= expressMarketing ==============
  .sass(
    "./assets/scss/courses/expressMarketing.scss",
    "./css/courses/expressMarketing.css"
  )
  //============= kakKrasivoSnimatNu ============
  .sass(
    "./assets/scss/courses/kakKrasivoSnimatNu.scss",
    "./css/courses/kakKrasivoSnimatNu.css"
  )
  //============ marathonBaevShooting ===========
  .sass(
    "./assets/scss/courses/marathonBaevShooting.scss",
    "./css/courses/marathonBaevShooting.css"
  )
  //=========== masterClassPoVspishkam ===========
  .sass(
    "./assets/scss/courses/masterClassPoVspishkam.scss",
    "./css/courses/masterClassPoVspishkam.css"
  )
  //================= mkBaevSs ===================
  .sass("./assets/scss/courses/mkBaevSs.scss", "./css/courses/mkBaevSs.css")
  //================== moontwo ===================
  .sass("./assets/scss/courses/moontwo.scss", "./css/courses/moontwo.css")
  //=============== nameInPhoto ==================
  .sass(
    "./assets/scss/courses/nameInPhoto.scss",
    "./css/courses/nameInPhoto.css"
  )
  //=============== perfomans ====================
  .sass("./assets/scss/courses/perfomans.scss", "./css/courses/perfomans.css")
  //================= retush =====================
  .sass("./assets/scss/courses/retush.scss", "./css/courses/retush.css")
  .js("./assets/js/courses/retush.js", "./js/courses/retush.js")
  //============ spetsusloviyaBaev ===============
  .sass(
    "./assets/scss/courses/spetsusloviyaBaev.scss",
    "./css/courses/spetsusloviyaBaev.css"
  )
  //=========== stanFeshnFotografom ==============
  .sass(
    "./assets/scss/courses/stanFeshnFotografom.scss",
    "./css/courses/stanFeshnFotografom.css"
  )
  //================== watter ====================
  .sass("./assets/scss/courses/watter.scss", "./css/courses/watter.css")
  //============= zhenskiyPortret ================
  .sass(
    "./assets/scss/courses/zhenskiyPortret.scss",
    "./css/courses/zhenskiyPortret.css"
  )

  //=========== MINICOURSES ================
  .sass(
    "./assets/scss/minicourse/cvetretush.scss",
    "/css/minicourse/cvetretush.css"
  )

  .setPublicPath("./public")
  .sourceMaps(productionSourceMaps, "source-map")
  .disableSuccessNotifications()
  .ImageWebp({
    from: "./assets/img", // Путь относительно каталога с webpack.mix.js
    to: "./public/img", // Путь относительно каталога с webpack.mix.js
    imageminWebpOptions: {
      quality: 90,
    },
  })
  .webpackConfig({
    plugins: [
      new CleanWebpackPlugin({
        dry: false,
        cleanAfterEveryBuildPatterns: [
          "./editor-style.css.map",
          "./style.css.map",
        ],
        cleanOnceBeforeBuildPatterns: [],
        dangerouslyAllowCleanPatternsOutsideProject: true,
      }),
      new CopyWebpackPlugin({
        patterns: [
          {
            from: "./public/css/style.css",
            to: "../",
            toType: "dir",
            noErrorOnMissing: true,
          },
          {
            from: "./public/css/editor-style.css",
            to: "../",
            toType: "dir",
            noErrorOnMissing: true,
          },
          {
            from: "./assets/img",
            to: "./img",
            noErrorOnMissing: true,
            globOptions: {
              ignore: ["**/**.webp"],
            },
          },
          {
            from: "./assets/fonts",
            to: "./fonts",
            noErrorOnMissing: true,
          },
          {
            from: "./assets/video",
            to: "./video",
            noErrorOnMissing: true,
          },
        ],
      }),
      // new ImageminPlugin({
      //   test: /\.(jpe?g|png|gif)$/i,
      //   disable: productionSourceMaps,
      //   pngquant: {
      //     quality: 95,
      //   },
      // }),
    ],
  })

  .options({
    processCssUrls: false,
    autoprefixer: {
      remove: false,
      options: {
        browsers: ["last 6 versions"],
      },
    },
  });
