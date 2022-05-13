package com.katas.java;

import java.util.List;

public final class TextAnalyzed {

  private long numberWords;

  public TextAnalyzed(long numberWords) {
    this.numberWords = numberWords;
  }

  public long wordCount() {
    return numberWords;
  }

  public List<String> topWords() {
    return List.of();
  }
}
