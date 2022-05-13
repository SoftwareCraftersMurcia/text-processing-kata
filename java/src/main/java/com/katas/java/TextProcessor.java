package com.katas.java;

import java.util.Arrays;

public final class TextProcessor {

  public static final String WORD_SEPARATOR = " ";

  public TextAnalyzed analyse(String text) {
    long numberOfwords = Arrays.stream(text.split(WORD_SEPARATOR))
                               .filter(word -> !word.isEmpty())
                               .count();

    return new TextAnalyzed(numberOfwords);
  }
}
