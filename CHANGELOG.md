# Changelog

<a name="1.5.4"></a>
## [1.5.4](https://github.com/maicol07/flarum-api-client/compare/1.5.3...1.5.4)

> Released on October 10, 2026

### 🐛 Bug Fixes

- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/3db4f938b99a96ec7b93ac11f243d04c8e3a0e33"><code>3db4f93</code></a> 🐛 declare nullable parameters explicitly</summary>

  > Implicitly nullable parameters are deprecated since PHP 8.4.

  </details>
- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/1c86308f516b657505ac0326b3bb05a261eca33a"><code>1c86308</code></a> 🐛 stop using deprecated Guzzle APIs</summary>

  > Use Client::request() with an uppercase method instead of the magic __call, and drop getConfig(): Guzzle already merges the client default headers.

  </details>

### 👷 Building scripts changes

- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/86122715dd85d8e7bd94dbe013ae542ef1da5862"><code>8612271</code></a> 🔧 add Rector configuration</summary>

  > Rector requires PHP 7.4+, so CI drops it before installing on PHP 7.3.

  </details>

### 👷 CI changes

- [`f13bd21`](https://github.com/maicol07/flarum-api-client/commit/f13bd21f65d7a9b68dc88bdebe4b7d13fc5ab2de) Ci: 🔧 update actions/checkout and actions/cache versions
- [`eb62c69`](https://github.com/maicol07/flarum-api-client/commit/eb62c69e42123623ec5b3793f9d16deffa04ce9c) 👷 generate changelog and release notes with git-cliff

### Other changes

- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/d98ebd2df6558dbe4c7263912352fcd7855088be"><code>d98ebd2</code></a> 🗑️ remove label commenter workflow and configuration files</summary>

  > - Deleted the GitHub Actions workflow for label commenting.
  > - Removed the associated configuration file as it is no longer needed.

  </details>
- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/4b762e7087f1c1c6115b65e14b46a1151dfb968e"><code>4b762e7</code></a> 🧹 update .gitignore to include additional files and directories</summary>

  > - Added entries for Node.js, PHP, and IDE-specific files
  > - Improved project cleanliness by ignoring unnecessary files

  </details>
- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/746edf5374b4a5e27cd02b04db45a0f9150f15a6"><code>746edf5</code></a> 🧹 add configuration files for various tools and frameworks</summary>

  > - Introduced new XML configuration files for Blade, Codeception, and PHPUnit.
  > - Updated existing configuration files to include additional paths and settings.
  > - These changes enhance project structure and support new features in the development environment.

  </details>

<a name="1.5.3"></a>
## [1.5.3](https://github.com/maicol07/flarum-api-client/compare/1.5.2...1.5.3)

> Released on May 23, 2026

### 🐛 Bug Fixes

- [`9e87aec`](https://github.com/maicol07/flarum-api-client/commit/9e87aec7bc9d70a67928fce942d52865d17e999f) Headers were not included

<a name="1.5.2"></a>
## [1.5.2](https://github.com/maicol07/flarum-api-client/compare/1.5.1...1.5.2)

> Released on March 19, 2024

### 🐛 Bug Fixes

- [`f59edbb`](https://github.com/maicol07/flarum-api-client/commit/f59edbb9acb26feaf8e1150991e31f881d5c2486) Included not working

### ✅ Tests

- [`7f2e2b3`](https://github.com/maicol07/flarum-api-client/commit/7f2e2b37591b26c3d9e660b49e9fdfc5250b9d30) Fixed tests

### 👷 CI changes

- [`83bad0b`](https://github.com/maicol07/flarum-api-client/commit/83bad0b4956fce5f382c0b07095ebe1039d33be7) Added automatic tests on push
- [`7a974ac`](https://github.com/maicol07/flarum-api-client/commit/7a974acdc776cdb646475395ed778fb18f13df8e) Added sleep to wait between tests
- [`31e8b67`](https://github.com/maicol07/flarum-api-client/commit/31e8b671356ab11088aac31a89b75d7fc116dde5) Use only ubuntu
- [`eee853a`](https://github.com/maicol07/flarum-api-client/commit/eee853aaa8648e706e9875160fad024725f51fee) Update checkout action

<a name="1.5.1"></a>
## [1.5.1](https://github.com/maicol07/flarum-api-client/compare/1.5...1.5.1)

> Released on February 27, 2024

### 🐛 Bug Fixes

- [`a01a220`](https://github.com/maicol07/flarum-api-client/commit/a01a2201086ec147d42c6e169f6a50bdc74bcf81) Relations with same ID but different type get overridden

### 📝 Docs changes

- [`ba038cf`](https://github.com/maicol07/flarum-api-client/commit/ba038cf56e0c07bc2193e2fc052f627d574fbfca) 📝 Updated docs

### Other changes

- [`5ca7164`](https://github.com/maicol07/flarum-api-client/commit/5ca71648d6b568cc227bc75597d690f292e3e653) **deps:** ⬆️ Upgraded dependencies
- [`aeed716`](https://github.com/maicol07/flarum-api-client/commit/aeed7164a5601ac6fb2d6a2f1c8e4f1f98a17af1) IDE files

<a name="1.5"></a>
## [1.5](https://github.com/maicol07/flarum-api-client/compare/1.4...1.5)

> Released on May 22, 2023

### Other changes

- [`f78eba2`](https://github.com/maicol07/flarum-api-client/commit/f78eba2027fd3b6d2532379fa1d26362d73e3b60) **deps:** Support Laravel 10

<a name="1.4"></a>
## [1.4](https://github.com/maicol07/flarum-api-client/compare/1.3...1.4)

> Released on October 01, 2022

### ✨ Features

- [`2896308`](https://github.com/maicol07/flarum-api-client/commit/289630892f118ca42e8108be6c3e9c81b14cae4b) Added support for Laravel 9.0 (#6)

### 🐛 Bug Fixes

- [`4accc6d`](https://github.com/maicol07/flarum-api-client/commit/4accc6d4901ff45808da4f75f2b2b442cd975016) Fix CSRF token mismatch issue on POST requests

<a name="1.3"></a>
## [1.3](https://github.com/maicol07/flarum-api-client/compare/1.2.3...1.3)

> Released on March 18, 2021

### ✨ Features

- [`8343bfa`](https://github.com/maicol07/flarum-api-client/commit/8343bfa484e4720f2d55a395e113644fff3c8be2) ✨ Accept id as a string (for user endpoint)
- [`7dd54c2`](https://github.com/maicol07/flarum-api-client/commit/7dd54c25260ce9dcb3732d9ed0f71f2250295232) ✨ `addQueryParameter` method is now public!

### 📝 Docs changes

- [`337864c`](https://github.com/maicol07/flarum-api-client/commit/337864cc99146b69689e22a36eb951d35b5aa382) 📝 Improved and added PHPDocs
- [`830802d`](https://github.com/maicol07/flarum-api-client/commit/830802de4456be4e0bb8690e2ed4b87a3f57a909) 📝 Updated docs
- [`154a066`](https://github.com/maicol07/flarum-api-client/commit/154a0660b1888e582e8b789caa176b3b360ab367) 📝 Updated docs

### ✅ Tests

- [`40c5b43`](https://github.com/maicol07/flarum-api-client/commit/40c5b4372229878ee66231ee742309a996d6adc3) ✅ Updated tests

### Other changes

- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/fb06ba171fc432d18faa198dd4dd4fc56be5f6dd"><code>fb06ba1</code></a> <b>deps:</b> 💥 📌 Removed support for Laravel 6 &amp; 7. Requires PHP 7.3</summary>

  > Following Flarum decisions

  </details>
- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/7ab15af47ecd8c6eb445f2105fad45e37e8f058b"><code>7ab15af</code></a> <b>deps:</b> 💥 📌 Removed support for Guzzle 6</summary>

  > Following Flarum decisions

  </details>

<a name="1.2.3"></a>
## [1.2.3](https://github.com/maicol07/flarum-api-client/compare/1.2.2...1.2.3)

> Released on January 31, 2021

### 🐛 Bug Fixes

- [`3ae08b2`](https://github.com/maicol07/flarum-api-client/commit/3ae08b2d753024d703f967d66661575f11dab58c) Get user by username in beta15

### 🔀 Pull Requests

- [`f832f3c`](https://github.com/maicol07/flarum-api-client/commit/f832f3c68340ff252c46d3451a9e5ebac821d160) Merge pull request #1 from maicol07/renovate/configure

<a name="1.2.2"></a>
## [1.2.2](https://github.com/maicol07/flarum-api-client/compare/1.2.1...1.2.2)

> Released on October 12, 2020

### 🐛 Bug Fixes

- [`3908bd1`](https://github.com/maicol07/flarum-api-client/commit/3908bd17ed5fb2e311c699489d15f5f441b29d40) Another Exception fix...

<a name="1.2.1"></a>
## [1.2.1](https://github.com/maicol07/flarum-api-client/compare/1.2...1.2.1)

> Released on October 12, 2020

### 🐛 Bug Fixes

- [`d1db758`](https://github.com/maicol07/flarum-api-client/commit/d1db7588e276cde31fabae800500ea503f59ce2d) 🐛 Exception due to strict return type

### 📝 Docs changes

- [`cb7880c`](https://github.com/maicol07/flarum-api-client/commit/cb7880ce18a6146889defad8c2d93f8ba7da03f7) Updated docs (1.2.1)

<a name="1.2"></a>
## [1.2](https://github.com/maicol07/flarum-api-client/compare/1.1.2...1.2)

> Released on October 12, 2020

### ✨ Features

- [`dcdfb58`](https://github.com/maicol07/flarum-api-client/commit/dcdfb5898073161bba3431669ffcb0dd422df005) ✨ Added support for request headers

<a name="1.1.2"></a>
## [1.1.2](https://github.com/maicol07/flarum-api-client/compare/1.1.1...1.1.2)

> Released on September 24, 2020

### ✅ Tests

- [`2886a36`](https://github.com/maicol07/flarum-api-client/commit/2886a366c2eb1e0835ec480c76d43083f1798eb8) ✅ Fixed env in tests
- [`f18efa7`](https://github.com/maicol07/flarum-api-client/commit/f18efa77723d61f1dff57036194614bee8b7a589) ✅ Suggested env package for Laravel 6 & 7
- [`983c29f`](https://github.com/maicol07/flarum-api-client/commit/983c29fbc83eb73c61d3d5f078460cb96023a5ea) ✅ Added User Test
- [`a860079`](https://github.com/maicol07/flarum-api-client/commit/a860079f1e8a72831cfd42304c0ac0b63d619950) ✅ Fixed tests not working when composer updating

### Other changes

- [`cbbbbc6`](https://github.com/maicol07/flarum-api-client/commit/cbbbbc6a0f55684ee0ff623f41900e7c41a44a9f) 📌 Support Guzzle v6
- [`aee5845`](https://github.com/maicol07/flarum-api-client/commit/aee58450cfa47ab736df697adfe58ff7771ce0a4) 📌 Support Guzzle v6

### ⏪ Reverts

- [`8a8b313`](https://github.com/maicol07/flarum-api-client/commit/8a8b3136af345c2470c794fd474ac322874329d1) Revert "chore: 📌 Support Guzzle v6"

<a name="1.1.1"></a>
## [1.1.1](https://github.com/maicol07/flarum-api-client/compare/1.1...1.1.1)

> Released on September 10, 2020

### 🐛 Bug Fixes

- [`398ed04`](https://github.com/maicol07/flarum-api-client/commit/398ed04a1bae9674585b3c051f1bddee3bb66de9) 🐛 Can't install on Laravel 6 & 7

<a name="1.1"></a>
## [1.1](https://github.com/maicol07/flarum-api-client/compare/1.0...1.1)

> Released on September 09, 2020

### ✨ Features

- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/6394a7aab85648cb310cc422828db4027d9b69d5"><code>6394a7a</code></a> ✨ Added token endpoint</summary>

  > Includes tests

  </details>
- [`78ef437`](https://github.com/maicol07/flarum-api-client/commit/78ef437476a5ed9360197041052847f143e1cf77) ✨ Filter method
- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/7fbeb2382f68e7bc2f87b7646de8d44b9a66797b"><code>7fbeb23</code></a> ✨ Added missing types and query helper</summary>

  > New types: posts and notifications
  > New query helper: page

  </details>

### ♻️ Code Refactoring

- [`7dab0e4`](https://github.com/maicol07/flarum-api-client/commit/7dab0e4f044cfa34465930a3976623d34b6c568d) ♻️ Refactor code
- [`a70d227`](https://github.com/maicol07/flarum-api-client/commit/a70d2277252a6e28d1e710d0d47941d06465e073) 💡 Documented source code
- [`6f37a4f`](https://github.com/maicol07/flarum-api-client/commit/6f37a4fcc6486d6e5b77b662ca87c2ffc36e6819) 💡 Documented source code
- [`51ad4cf`](https://github.com/maicol07/flarum-api-client/commit/51ad4cff8e6645f09cf88a7b5ab220b7fc9b50a8) 💡 Documented source code
- [`ec9eca0`](https://github.com/maicol07/flarum-api-client/commit/ec9eca08bf94f7f32f0fb78a7a748a4a395d523f) ♻️ Refactor code (PHP CS Fixer)

### 📝 Docs changes

- [`c783a77`](https://github.com/maicol07/flarum-api-client/commit/c783a7717e7878d738881c4c32c93c41a7bd13d6) :bulb: Added @method tag for request method
- [`d1da921`](https://github.com/maicol07/flarum-api-client/commit/d1da921933994b19bcf134c452da1fe0a782f80d) 📝 Added docs
- [`d41e9e1`](https://github.com/maicol07/flarum-api-client/commit/d41e9e1014a224aebeafb1eed95947af72261147) 📝 Updated docs
- [`ad72e50`](https://github.com/maicol07/flarum-api-client/commit/ad72e50aa61bfd4205b159aa95aaa3ea6e861466) 📝 Updated documentation

### ✅ Tests

- [`7d0aa35`](https://github.com/maicol07/flarum-api-client/commit/7d0aa35f2f1adfcfd01f2545e1d8c3140f2ebdba) :bug: Fixed tests not working
- [`5bb87d5`](https://github.com/maicol07/flarum-api-client/commit/5bb87d527e388d73534f9b6524bdb72b7b78fc3b) :bug: Fixed tests not working
- [`6c973c1`](https://github.com/maicol07/flarum-api-client/commit/6c973c1e05e0a03137fd2e634d66af8a3580c43a) 🐛 Default URL not working in tests
- [`36c311f`](https://github.com/maicol07/flarum-api-client/commit/36c311fd893a9144c27270270135761b5880288c) ✅ Added Forum Info Test
- [`22e5df1`](https://github.com/maicol07/flarum-api-client/commit/22e5df1da082cd1fecf1bab6c6ad69f7e93bc118) ✅ Updated test setup

### Other changes

- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/3394bfff0fd4babf39b471623c3eaba868e1b1cf"><code>3394bff</code></a> <b>deps:</b> ⬆️ Upgrade dependencies</summary>

  > Added compatibility with Laravel 8
  >
  > Changelogs summary:
  >  
  >   - symfony/translation-contracts updated from v2.1.3 to v2.2.0
  >     See changes: https://github.com/symfony/translation-contracts/compare/v2.1.3...v2.2.0
  >     Release notes: https://github.com/symfony/translation-contracts/releases/tag/v2.2.0
  >  
  >   - symfony/translation updated from v5.1.3 to v5.1.5
  >     See changes: https://github.com/symfony/translation/compare/v5.1.3...v5.1.5
  >     Release notes: https://github.com/symfony/translation/releases/tag/v5.1.5
  >  
  >   - nesbot/carbon updated from 2.39.0 to 2.39.1
  >     See changes: https://github.com/briannesbitt/Carbon/compare/2.39.0...2.39.1
  >     Release notes: https://github.com/briannesbitt/Carbon/releases/tag/2.39.1
  >  
  >   - illuminate/macroable installed in version v8.0.0
  >     Release notes: https://github.com/illuminate/macroable/releases/tag/v8.0.0
  >  
  >   - illuminate/contracts updated from v7.26.1 to v8.0.0
  >     See changes: https://github.com/illuminate/contracts/compare/v7.26.1...v8.0.0
  >     Release notes: https://github.com/illuminate/contracts/releases/tag/v8.0.0
  >  
  >   - illuminate/collections installed in version v8.0.0
  >     Release notes: https://github.com/illuminate/collections/releases/tag/v8.0.0
  >  
  >   - illuminate/support updated from v7.26.1 to v8.0.0
  >     See changes: https://github.com/illuminate/support/compare/v7.26.1...v8.0.0
  >     Release notes: https://github.com/illuminate/support/releases/tag/v8.0.0
  >  
  >   - illuminate/cache updated from v7.26.1 to v8.0.0
  >     See changes: https://github.com/illuminate/cache/compare/v7.26.1...v8.0.0
  >     Release notes: https://github.com/illuminate/cache/releases/tag/v8.0.0
  >  
  >   - nikic/php-parser updated from v4.9.0 to v4.9.1
  >     See changes: https://github.com/nikic/PHP-Parser/compare/v4.9.0...v4.9.1
  >     Release notes: https://github.com/nikic/PHP-Parser/releases/tag/v4.9.1
  >  
  >   - phpunit/php-code-coverage updated from 9.1.5 to 9.1.8
  >     See changes: https://github.com/sebastianbergmann/php-code-coverage/compare/9.1.5...9.1.8
  >     Release notes: https://github.com/sebastianbergmann/php-code-coverage/releases/tag/9.1.8
  >  
  >   - roave/security-advisories updated from dev-master@89bed67 to dev-master@697cfbd
  >     See changes: https://github.com/Roave/SecurityAdvisories/compare/89bed67...697cfbd

  </details>

<a name="1.0"></a>
## [1.0](https://github.com/maicol07/flarum-api-client/compare/0.2.0-beta.2...1.0)

> Released on August 27, 2020

### ♻️ Code Refactoring

- [`1b7c2ba`](https://github.com/maicol07/flarum-api-client/commit/1b7c2ba209cef5acaf65d2c79a65bee4be67ac8d) :recycle: Changed namespace and ownership to Maicol07
- [`0b282bb`](https://github.com/maicol07/flarum-api-client/commit/0b282bb7b1e532efe78c1b02e58a9283108b1219) :recycle: Delete branch alias
- [`d808b1f`](https://github.com/maicol07/flarum-api-client/commit/d808b1f7658b1dec100d77eda1c804ac58145c0f) :recycle: Renamed Flarum.php to Client.php
- [`f9ef162`](https://github.com/maicol07/flarum-api-client/commit/f9ef162f110ab7470c5e2ad995f42171cd6a1d81) :recycle: Deleted changelog.md
- <details><summary><a href="https://github.com/maicol07/flarum-api-client/commit/29e84446f46c1e4a1265f2055ccd7eabfa75c2a5"><code>29e8444</code></a> :recycle: Some refactor</summary>

  > Updated README.md example

  </details>

### Other changes

- [`f7f2545`](https://github.com/maicol07/flarum-api-client/commit/f7f2545e0d3b1bc036f63e54f1589bfcc2dfcb54) **deps:** :arrow_up: Upgraded composer deps

### ⏪ Reverts

- [`f95591a`](https://github.com/maicol07/flarum-api-client/commit/f95591a79583d957c547097e9597aac43ebae899) Revert latest commit

### 🔀 Pull Requests

- [`efbd39a`](https://github.com/maicol07/flarum-api-client/commit/efbd39a3b5eeaebf65c1b7c127b7278a8cf6b26b) Merge pull request #12 from flagrow/luceos-patch-1

<a name="0.2.0-beta.2"></a>
## [0.2.0-beta.2](https://github.com/maicol07/flarum-api-client/compare/0.2.0-beta.1...0.2.0-beta.2)

> Released on March 04, 2017

### 🐛 Bug Fixes

- [`dfe4e0a`](https://github.com/maicol07/flarum-api-client/commit/dfe4e0aa5e68c8bd21fbdc831ebd83ba11520853) Fixed getting property or relationship
- [`4217e8c`](https://github.com/maicol07/flarum-api-client/commit/4217e8cbd8070d9a981bf3bb2d112b5ce51cb3d5) Fixed relationship parsing

<a name="0.2.0-beta.1"></a>
## [0.2.0-beta.1](https://github.com/maicol07/flarum-api-client/compare/0.1.2...0.2.0-beta.1)

> Released on March 04, 2017

### 🐛 Bug Fixes

- [`92d9687`](https://github.com/maicol07/flarum-api-client/commit/92d9687eef8b1745af0d9fdd32959f2024811448) Fixed merge to master
- [`5bd1355`](https://github.com/maicol07/flarum-api-client/commit/5bd135547d0e1a11de8f046b9904a76e87214269) Fixed token, which should have stringtoken, userId=N

### 🔀 Pull Requests

- [`839617b`](https://github.com/maicol07/flarum-api-client/commit/839617be7c05d2a9c28746fac565e8038f01f651) Merge pull request #9 from flagrow/analysis-q2QQ9l

<a name="0.1.2"></a>
## [0.1.2](https://github.com/maicol07/flarum-api-client/compare/0.1.1...0.1.2)

> Released on January 22, 2016

### 🐛 Bug Fixes

- [`e8e9810`](https://github.com/maicol07/flarum-api-client/commit/e8e981046ae3096a19a3ae3a4ff9344a17ec5517) Fixed explanation of master key

### 🔀 Pull Requests

- [`727d219`](https://github.com/maicol07/flarum-api-client/commit/727d2195c3d4c70eb9b27e61e63cda50e918170b) Merge pull request #6 from flagrow/analysis-XlKK29

<a name="0.1.1"></a>
## [0.1.1](https://github.com/maicol07/flarum-api-client/compare/0.1.0...0.1.1)

> Released on January 22, 2016

### 🐛 Bug Fixes

- [`6591a4e`](https://github.com/maicol07/flarum-api-client/commit/6591a4ecc2c9dc1ae6f7b6261eba490610827b8e) Fixed missing link
- [`ce31c18`](https://github.com/maicol07/flarum-api-client/commit/ce31c186b3e624200c96754e9d80c463bdfc2dbb) Fixed typo

<a name="0.1.0"></a>
## 0.1.0

> Released on January 22, 2016

### 🔀 Pull Requests

- [`c5705c3`](https://github.com/maicol07/flarum-api-client/commit/c5705c3b600df3d9e0c5049af7c9db2e5f751a5b) Merge pull request #1 from flagrow/analysis-XNAAKg

