<?php

/**
 * demo.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'no_demo_text'           => '申し訳ありませんが、<abbr title=":route">このページ</abbr>のデモ説明文はもうありません。',
    'see_help_icon'          => '右上角にある<i class="fa fa-question-circle"></i>アイコンが更に多くの情報を教えてくれるかもしれません。',
    'index'                  => '<strong>Firefly III</strong>へようこそ！このページでは、あなたの収支に関しての基本的な情報が得られます。詳しくは、&rarr;<a href=":asset">Asset Accounts</a>アカウントを確認、あるいは<a href=":budgets">予算</a>や<a href=":reports">レポート</a>ページを見てください。或いは、気ままに見て回るのも良いでしょう。',
    'accounts-index'         => '資産勘定はあなたの個人預金口座です。支出元アカウントはあなたがお金を支出する場所、店や友人などです。
収入アカウントはお金を受け取る元、あなたの仕事や政府などの収入源です。債務はあなたの負債や古いクレジットカードの借金、奨学金などのローンです。このページではそれらを編集したり削除したりできます。',
    'budgets-index'          => 'このページはあなたの支出の概要を表しています。一番上のバーは予算計上に利用可能な残高を表しています。これは右の残高をクリックすることによってどんな期間にも変更できます。',
    'reports-index-start'    => 'Firefly IIIは多くの形式のレポートに対応しています。右上角の<i class="fa fa-question-circle"></i>アイコンで見ることができます。',
    'reports-index-examples' => 'これらの例を必ず確認してください：<a href=":one">毎月の財務概要</a>、<a href=":two">年次財務概要</a>、<a href=":three">予算概要</a>。',
    'currencies-index'       => 'Firefly IIIは多くの通貨に対応しています。デフォルトはユーロですが、米ドルや他の多くの通貨に変更することもできます。ご覧のように少しの種類の通貨しか含まれていませんが、あなたの好みで追加することも出来ます。デフォルトの通貨を変更しても既存の収支には影響ありません: Firefly IIIは同時に複数の通貨を扱うことができます。',
    'transactions-index'     => 'これらの経費、預金、送金などに特に意味はありません。自動で生成されたものです。',
    'piggy-banks-index'      => 'ご覧のように、3つの貯金箱があります。プラスやマイナスのボタンでそれぞれの貯金箱のお金の量を調整することができます。貯金箱の名前をクリックするとそれぞれの貯金箱の管理ができます。',
    'profile-index'          => 'デモサイトは4時間毎にリセットされることに注意してください。あなたの変更はいつでも破棄される可能性があります。これは自動的に行われ、バグではありません。',
];
