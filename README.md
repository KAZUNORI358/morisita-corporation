![株式会社森下のkv写真です](/img/top/kv.jpg)

# 株式会社森下 (架空サイト)

## 概要

Hello Mentor の課題でFigmaのデザインカンプをもとに、コーディングしました。

## 制作期間

2026年1月~2月(約1ヶ月)

## 公開URL

[morisita-corporation.kazunori-folio.com]:morisita-corporation.kazunori-folio.com/ "森下リンク"

## 概要

コーポレートサイトです。  
WordPressを用いて、お知らせ、製品紹介、事業紹介、アクセスをクライアントが更新できるようにしました。

## 開発環境のセットアップ

### 構築環境

- Cursor
- LocalWP
- WP環境：WordPress 6.9
- ライブラリ：GSAP,Splide.js

## Cursor 推奨拡張機能

開発効率を向上させるために、以下の拡張機能の使用しています

### SCSS 開発

- **Live Sass Compiler**： SCSS ファイルのリアルタイムコンパイル

### コードフォーマット

- **Format HTML in PHP**： PHP ファイル内の HTML と PHP コードの自動フォーマット
- **Prettier**： SCSS、JavaScript、JSON 等のコードフォーマット

## ファイル構成

```
MORISITA Corporation theme/
├── css/
├── img/
├── js/
├── scss/
├── template-parts/
├── .gitignore
├── *.php
├── README.md
├── screenshot.jpg
└── style.css
```

### 重要な注意事項

- **テーマファイル以外**: データベース、プラグイン設定等は
  WPvivid で共有するため、管理者に連絡すること

## コーディングルール

- **命名規則**: FLOCSS (c-,l- プレフィックスを使用)
- **CSS**: Sass(SCSS) を使用しています。
- **PHP**: セキュリティのため、エスケープ処理を行う
- **REM単位**: 文字サイズ、余白の指定にrem (root em) 単位を使用しています。