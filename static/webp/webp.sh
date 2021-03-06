#!/bin/bash

DIR="./images" # 対象ディレクトリパス(要変更)
JPEG_CWEBP_OPTS="-q 75 -m 4" # Jpeg向け非可逆cwebpオプション
PNG_CWEBP_OPTS="-lossless" # PNG向け可逆cwebpオプション
CWEBP="/usr/local/bin/cwebp" # cwebpコマンドの場所

cd $(dirname $0)
shopt -s nocasematch

find $DIR -type f -regextype posix-extended -iregex ".*\.(jpe?g|png)$" -print0 | \
while IFS= read -r -d '' SRC; do
  WEBP="$SRC.webp"
  if [[ ! -e $WEBP || $SRC -nt $WEBP ]]; then
    if [[ $SRC =~ \.jpe?g$ ]]; then
      echo "Convert to lossy WebP: $SRC"
      "$CWEBP" $JPEG_CWEBP_OPTS "$SRC" -o "$WEBP"
    elif [[ $SRC =~ \.png$ ]]; then
      echo "Convert to lossless WebP: $SRC"
      "$CWEBP" $PNG_CWEBP_OPTS "$SRC" -o "$WEBP"
    fi
  fi
done
