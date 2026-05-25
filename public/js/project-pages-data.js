window.PROJECT_PAGES = {
  "clustering": {
    "title": "Health Burden Clustering in South Korea Using K-Means",
    "accent": "K-Means Health Analytics",
    "eyebrow": "Data Analyst Project · Clustering · RStudio",
    "description": "A clustering analysis project on South Korea health burden data, using preprocessing, outlier handling, normalization, PCA, K-Means, elbow method, and silhouette validation to identify disease burden patterns.",
    "repoUrl": "",
    "heroImage": "/images/projects/clustering/hero.jpg",
    "visualLabel": "Best Cluster Setup",
    "visualValue": "K = 3",
    "visualBars": [
      [
        "K=3",
        88
      ],
      [
        "K=4",
        76
      ],
      [
        "K=5",
        80
      ],
      [
        "PCA",
        84
      ]
    ],
    "floatOne": [
      "Country",
      "KR"
    ],
    "floatTwo": [
      "Silhouette",
      "0.33965"
    ],
    "metrics": [
      [
        "Country Focus",
        "South Korea"
      ],
      [
        "Year",
        "2022"
      ],
      [
        "Best K",
        "3"
      ],
      [
        "Silhouette",
        "0.33965"
      ]
    ],
    "workflowTitle": "From health statistics to interpretable disease burden clusters.",
    "workflowDesc": "The analysis filters South Korea 2022 data, encodes categorical variables, removes outliers, normalizes numeric features, applies PCA, and compares K-Means cluster quality.",
    "workflow": [
      [
        "Data Filtering",
        "Focused the dataset on South Korea health statistics for 2022."
      ],
      [
        "Preprocessing",
        "Encoded categorical variables, inspected distributions, handled outliers, and normalized numeric features."
      ],
      [
        "Dimensionality Reduction",
        "Applied PCA to reduce feature space and support cluster visualization."
      ],
      [
        "K-Means Validation",
        "Compared k=3, k=4, and k=5 using clustering plots, elbow method, and silhouette scores."
      ]
    ],
    "insights": [
      [
        "Best Cluster Count",
        "3",
        "The report selected three clusters based on elbow and silhouette validation."
      ],
      [
        "Avg Silhouette",
        "0.33965",
        "K=3 achieved the strongest separation among the compared settings."
      ],
      [
        "Main Method",
        "PCA + K-Means",
        "PCA helped simplify multidimensional health indicators for visualization."
      ]
    ],
    "resultsTitle": "Three clusters gave the most effective segmentation among tested settings.",
    "resultsDesc": "K=3 achieved a better silhouette result than k=4 and k=5, making it the most interpretable option for summarizing health burden patterns.",
    "results": [
      [
        "Algorithm",
        "K-Means"
      ],
      [
        "Validation",
        "Elbow + Silhouette"
      ],
      [
        "Best K",
        "3"
      ],
      [
        "Tool",
        "RStudio"
      ]
    ],
    "chartTitle": "Silhouette Comparison",
    "chartSub": "score",
    "chartData": [
      [
        "K=3",
        0.33965
      ],
      [
        "K=4",
        0.321
      ],
      [
        "K=5",
        0.328
      ]
    ],
    "takeaways": [
      [
        "Preprocessing matters",
        "Outlier handling and normalization stabilize clustering for mixed-scale health indicators."
      ],
      [
        "K=3 is clearer",
        "Three clusters provide stronger separation while staying interpretable."
      ],
      [
        "Useful segmentation",
        "The output helps compare disease prevalence, mortality, and healthcare access patterns."
      ]
    ],
    "gallery": [
      [
        "Data Exploration",
        "/images/projects/clustering/cluster-21.jpg",
        "Exploratory analysis section from the report."
      ],
      [
        "Normalization",
        "/images/projects/clustering/cluster-24.jpg",
        "Preprocessing and normalized distribution checks."
      ],
      [
        "Cluster K=3",
        "/images/projects/clustering/cluster-26.jpg",
        "K-Means clustering visualization."
      ],
      [
        "Elbow Method",
        "/images/projects/clustering/cluster-29.jpg",
        "Cluster number validation."
      ],
      [
        "Silhouette Result",
        "/images/projects/clustering/cluster-30.jpg",
        "Silhouette validation summary."
      ],
      [
        "Cluster Interpretation",
        "/images/projects/clustering/cluster-31.jpg",
        "Interpretation of final clusters."
      ]
    ]
  }
};
