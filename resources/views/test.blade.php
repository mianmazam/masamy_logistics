
<?xml version="1.0" encoding="utf-8"?>
<LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:orientation="vertical"
    android:weightSum="1"
    tools:context=".AdminHomeActivity">
    <LinearLayout
        android:layout_width="match_parent"
        android:layout_height="0dp"
        android:layout_weight="0.1"
        android:layout_gravity="center"
        android:gravity="center"
        android:background="@drawable/question"
        >
        <ImageView
            android:layout_width="30dp"
            android:layout_height="30dp"
            android:src="@drawable/back"
            android:layout_weight="1"
            />

        <TextView
            android:paddingHorizontal="20dp"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="Add New Questions "
            android:textSize="@dimen/_18sdp"
            android:textColor="@color/white"
            android:layout_weight="1"

            />

        <ImageView
            android:layout_width="40dp"
            android:layout_height="40dp"
            android:src="@drawable/menu"
            android:layout_weight="1"
            />

    </LinearLayout>
    <LinearLayout
        android:layout_width="match_parent"
        android:layout_height="0dp"
        android:layout_weight="0.1"
        android:background="@drawable/nav"
        >

    </LinearLayout>

    <LinearLayout
        android:layout_width="match_parent"
        android:layout_height="0dp"
        android:layout_weight="0.8"
        android:background="@color/black"
        ></LinearLayout>
</LinearLayout>





<LinearLayout
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:orientation="horizontal"
            android:background="@drawable/question"
            android:gravity="center"
            android:padding="5dp"
            >
            <ImageView
                android:layout_width="30dp"
                android:layout_height="30dp"
                android:src="@drawable/back"
                android:layout_weight="1"
                />

            <TextView
                android:paddingHorizontal="20dp"
                android:layout_width="wrap_content"
                android:layout_height="wrap_content"
                android:text="Add New Questions "
                android:textSize="@dimen/_18sdp"
                android:textColor="@color/white"
                android:layout_weight="1"

                />

            <ImageView
                android:layout_width="40dp"
                android:layout_height="40dp"
                android:src="@drawable/menu"
                android:layout_weight="1"
                />

        </LinearLayout>