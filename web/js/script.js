/*
 * Copyright (c) 2009 Simo Kinnunen.
 * Licensed under the MIT license.
 * 
 * @version 1.09i
 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 1q=(12(){6 m=12(){11 m.1j.1A(1f,1m)};6 x=m.4J={1I:(12(){6 C=1h,E={4K:1,4L:1};6 B=[],D=12(){7(C){11}C=1k;18(6 F;F=B.3u();F()){}};7(14.1U){14.1U("4M",D,1h);1r.1U("4N",D,1h)}7(!1r.4O&&14.2C){(12(){E[14.2C]?D():2c(1m.2e,10)})()}7(14.2C&&14.3v){(12(){2D{14.2E.4P("1o");D()}2F(F){2c(1m.2e,1)}})()}q(1r,"4Q",D);11 12(F){7(!1m.1c){D()}1b{C?F():B.1t(F)}}})(),2G:12(){11 14.4R||14.2E}};6 n=m.1w={2H:12(C,B){13.2f=1x(C);13.3w=4S(C).2I(/[a-z%]*$/)[0]||"1n";13.1i=12(D){11 D/B*13.2f};13.1Q=12(D){11 D/13.2f*B};13.3x=12(){11 13.2f+13.3w}},2J:12(C,B){6 D=C.1J;C.1J=D+(D&&" ")+B;11 C},1d:j(12(C){6 B={};B.1d=C.1j(/^4T\\((.*?),\\s*([\\d.]+)\\)/,12(E,D,F){B.1V=1x(F);11"4U("+D+")"});11 B}),1W:j(12(B){7(1X B=="4V"){11 B}7(/%$/.1B(B)){11 1x(B)/2K}11{"3y-2g":0.5,"3z-2g":0.4W,2g:0.75,"3A-2g":0.4X,"3A-2h":1.4Y,2h:1.25,"3z-2h":1.5,"3y-2h":2}[B]||1}),2L:12(C){6 B=14.4Z;7(B&&B.3B){11 1u a(B.3B(C,1f))}7(C.2M){11 1u a(C.2M)}11 1u a(C.15)},2i:j(12(F){6 G={3C:F,1y:F.2I(/^-([a-z]+)-2i\\(/)[1],2j:[]},C=F.50(F.51("(")).2I(/([\\d.]+=)?(#[a-3D-9]+|[a-z]+\\(.*?\\)|[a-z]+)/3E);18(6 E=0,B=C.1c,D;E<B;++E){D=C[E].1K("=",2).52();G.2j.1t([D[1]||E/(B-1),D[0]])}11 G}),3F:j(12(E){6 D=[],C=/\\s*((["\'])([\\s\\S]*?[^\\\\])\\2|[^,]+)\\s*/g,B;1R(B=C.2N(E)){D.1t(B[3]||B[1])}11 D}),2O:j(12(G){6 E=14.1e("15"),D,C,B;E.1y="1C/2P";E.1L=G;2D{E.1g(14.2k("/**/"))}2F(F){}C=g("2Q")[0];C.53(E,C.1M);D=(E.3G||E.3H);B=D&&!D.2R;C.2l(E);11 B}),3I:12(D,C){6 B=54("(?:^|\\\\s+)"+C+"(?=\\\\s|$)","g");D.1J=D.1J.1j(B,"");11 D},3J:12(D,C){6 B=14.1e("55").15;7(B[D]===1Y){11 1h}B[D]=C;11 B[D]===C},2S:12(E,D,B,C){7(D.19("2S")=="56"){7(B>0){E=" "+E}}1b{7(B<C-1){E+=" "}}11 E},1D:j(12(F){7(F=="1Z"){11 1f}6 E=[],G={},B,C=0;6 D=/(#[a-3D-9]+|[a-z]+\\(.*?\\)|[a-z]+)|(-?[\\d.]+[a-z%]*)|,/3E;1R(B=D.2N(F)){7(B[0]==","){E.1t(G);G={};C=0}1b{7(B[1]){G.1d=B[1]}1b{G[["2m","2n","57"][C++]]=B[2]}}}E.1t(G);11 E}),2o:(12(){6 B={58:12(C){11 C.3K()},59:12(C){11 C.1E()},5a:12(C){11 C.1j(/\\b./g,12(D){11 D.3K()})}};11 12(E,D){6 C=B[D.19("2o")];11 C?C(E):E}})(),3L:(12(){6 D={1F:1,"1F-1S":1,"5b-2p":1};6 C=/^\\s+/,B=/\\s+$/;11 12(H,F,G,E){7(E){7(E.2q.1E()=="5c"){H=H.1j(C,"")}}7(D[F.19("1v")]){11 H}7(!G.5d){H=H.1j(C,"")}7(!G.2T){H=H.1j(B,"")}11 H}})()};n.1I=(12(){6 B=!n.2O("3M"),E=1h;6 D=[],H=12(){B=1k;18(6 K;K=D.3u();K()){}};6 I=g("5e"),J=g("15");12 C(K){11 K.2R||G(K.3G,K.1L||"2U")}12 G(M,P){7(!n.2O(P||"3M")){11 1k}7(!M||M.2R){11 1h}2D{6 Q=M.5f,O;7(Q){3N:18(6 L=0,K=Q.1c;O=Q[L],L<K;++L){3O(O.1y){1N 2:1G;1N 3:7(!G(O.3H,O.1L.5g)){11 1h}1G;2V:1G 3N}}}}2F(N){}11 1k}12 F(){7(14.3v){11 1k}6 L,K;18(K=0;L=I[K];++K){7(L.5h.1E()=="5i"&&!C(L)){11 1h}}18(K=0;L=J[K];++K){7(!C(L)){11 1h}}11 1k}x.1I(12(){7(!E){E=n.2L(14.2E).3P()}7(B||(E&&F())){H()}1b{2c(1m.2e,10)}});11 12(K){7(B){K()}1b{D.1t(K)}}})();12 s(D){6 C=13.3Q=D.3Q,B={"\\5j":1,"\\2W":1,"\\5k":1};13.20=D.20;13.w=D.w;13.2X=1z(C["5l-5m-2r"],10);13.2Y=C["21-2Y"].1E();13.2Z=C["21-2Z"];13.15=C["21-15"]||"22";13.30=(12(){6 F=C.5n.1K(/\\s+/);6 E={23:1z(F[0],10),1T:1z(F[1],10),3R:1z(F[2],10),31:1z(F[3],10)};E.1s=E.3R-E.23;E.1a=E.31-E.1T;E.3x=12(){11[13.23,13.1T,13.1s,13.1a].3S(" ")};11 E})();13.24=-1z(C.24,10);13.32=-1z(C.32,10);13.1a=-13.24+13.32;13.33=12(L,N,E){6 O=13.20,M,K,G,P=[],F=0,J=-1,I=-1,H;1R(H=L[++J]){M=O[H]||13.34;7(!M){26}7(K){F-=G=K[H]||0;P[I]-=G}F+=P[++I]=~~(M.w||13.w)+N+(B[H]?E:0);K=M.k}P.35=F;11 P}}12 f(){6 C={},B={36:"37",37:"36"};13.27=12(D){(C[D.15]||(C[D.15]={}))[D.2Z]=D};13.19=12(H,I){6 G=C[H]||C[B[H]]||C.22||C.37||C.36;7(!G){11 1f}I={22:38,5o:5p}[I]||1z(I,10);7(G[I]){11 G[I]}6 E={1:1,5q:0}[I%2K],K=[],F,D;7(E===1Y){E=I>38}7(I==5r){I=38}18(6 J 2p G){7(!k(G,J)){26}J=1z(J,10);7(!F||J<F){F=J}7(!D||J>D){D=J}K.1t(J)}7(I<F){I=F}7(I>D){I=D}K.5s(12(M,L){11(E?(M>=I&&L>=I)?M<L:M>L:(M<=I&&L<=I)?M>L:M<L)?-1:1});11 G[K[0]]}}12 r(){12 D(F,G){7(F.3T){11 F.3T(G)}11 F.5t(G)&16}12 B(G){6 F=G.5u;7(!F||D(13,F)){11}C(13,G.1y=="3U")}12 E(F){C(13,F.1y=="3V")}12 C(F,G){2c(12(){6 H=d.19(F).39;m.1j(F,G?h(H,H.2s):H,1k)},10)}13.3W=12(F){7(F.5v===1Y){q(F,"3U",B);q(F,"5w",B)}1b{q(F,"3V",E);q(F,"5x",E)}}}12 u(){6 C=[],D={};12 B(H){6 E=[],G;18(6 F=0;G=H[F];++F){E[F]=C[D[G]]}11 E}13.27=12(F,E){D[F]=C.1t(E)-1};13.3X=12(){6 E=1m.1c?B(1m):C,F;18(6 G=0;F=E[G++];){m.1j(F[0],F[1],1k)}}}12 A(){6 D={},B=0;12 C(E){11 E.3Y||(E.3Y=++B)}13.19=12(E){6 F=C(E);11 D[F]||(D[F]={})}}12 a(B){6 D={},C={};13.3Z=12(E){18(6 F 2p E){7(k(E,F)){D[F]=E[F]}}11 13};13.19=12(E){11 D[E]!=1Y?D[E]:B[E]};13.40=12(F,E){11 C[F]||(C[F]=1u n.2H(13.19(F),E))};13.3P=12(){11!!B}}12 q(C,B,D){7(C.1U){C.1U(B,D,1h)}1b{7(C.41){C.41("42"+B,12(){11 D.5y(C,1r.5z)})}}}12 v(C,B){6 D=d.19(C);7(D.39){11 C}7(B.2s&&B.43[C.2q.1E()]){b.3W(C)}D.39=B;11 C}12 j(B){6 C={};11 12(D){7(!k(C,D)){C[D]=B.1A(1f,1m)}11 C[D]}}12 c(F,E){6 B=n.3F(E.19("3a").1E()),D;18(6 C=0;D=B[C];++C){7(i[D]){11 i[D].19(E.19("5A"),E.19("5B"))}}11 1f}12 g(B){11 14.44(B)}12 k(C,B){11 C.5C(B)}12 h(){6 C={},B,F;18(6 E=0,D=1m.1c;B=1m[E],E<D;++E){18(F 2p B){7(k(B,F)){C[F]=B[F]}}}11 C}12 o(E,M,C,N,F,D){6 K=14.5D(),H;7(M===""){11 K}6 L=N.45;6 I=M.1K(p[L]),B=(L=="3b");7(B&&t){7(/^\\s/.1B(M)){I.5E("")}7(/\\s$/.1B(M)){I.1t("")}}18(6 J=0,G=I.1c;J<G;++J){H=z[N.28](E,B?n.2S(I[J],C,J,G):I[J],C,N,F,D,J<G-1);7(H){K.1g(H)}}11 K}12 l(D,M){6 C=D.2q.1E();7(M.46[C]){11}6 E=!M.47[C];6 B=n.2L(v(D,M)).3Z(M);6 F=c(D,B),G,K,I,H,L,J;7(!F){11}18(G=D.1M;G;G=I){K=G.48;I=G.2T;7(E&&K==3){7(H){H.5F(G.49);D.2l(G)}1b{H=G}7(I){26}}7(H){D.5G(o(F,n.3L(H.49,B,H,J),B,M,G,D),H);H=1f}7(K==1){7(G.1M){7(G.2q.1E()=="17"){z[M.28](F,1f,B,M,G,D)}1b{1m.2e(G,M)}}J=G}}}6 t=" ".1K(/\\s+/).1c==0;6 d=1u A();6 b=1u r();6 y=1u u();6 e=1h;6 z={},i={},w={4a:1h,28:1f,3c:1h,2s:1h,43:{a:1k},46:{5H:1,1H:1,5I:1,5J:1,2Q:1,5K:1,5L:1,5M:1,5N:1,5O:1,5P:1,15:1,5Q:1,5R:1,5S:1},3d:1k,4b:(1r.5T||(1r.4c&&12(B){11 4c(B)})||(1r.4d&&4d.3e)||(1r.4e&&4e.3e)||(1r.2t&&2t.3f&&2t.3f.4f&&2t.3f.4f.3e)||(1r.$$&&12(B){11 $$(B)})||(1r.$&&12(B){11 $(B)})||(14.4g&&12(B){11 14.4g(B)})||g),45:"3b",47:{5U:1,5V:1,5W:1,5X:1,5Y:1,5Z:1,60:1,61:1,62:1},1D:"1Z"};6 p={3b:/\\s/.1B("\\2W")?/[^\\S\\2W]+/:/\\s+/,63:"",1Z:/^/};m.64=12(){x.1I();11 m};m.65=12(){y.3X.1A(y,1m);11 m};m.3g=12(C,B){7(!B){11 m}z[C]=B;11 m.3h("28",C)};m.66=12(D){7(!D){11 m}6 B=1u s(D),C=B.2Y;7(!i[C]){i[C]=1u f()}i[C].27(B);11 m.3h("3a",\'"\'+C+\'"\')};m.1j=12(D,C,B){C=h(w,C);7(!C.28){11 m}7(!e){n.2J(x.2G(),"17-67 17-4h");n.1I(12(){n.2J(n.3I(x.2G(),"17-4h"),"17-1I")});e=1k}7(C.2s){C.3c=1k}7(C.4a){4i C.3a}7(1X C.1D=="2u"){C.1D=n.1D(C.1D)}7(1X C.1d=="2u"&&/^-/.1B(C.1d)){C.29=n.2i(C.1d)}1b{4i C.29}7(!B){y.27(D,1m)}7(D.48||1X D=="2u"){D=[D]}n.1I(12(){18(6 F=0,E=D.1c;F<E;++F){6 G=D[F];7(1X G=="2u"){m.1j(C.4b(G),C,1k)}1b{l(G,C)}}});11 m};m.3h=12(B,C){w[B]=C;11 m};11 m})();1q.3g("2v",(12(){6 e=14.68;7(!e){11}e.27("1p","69:6a-6b-6c:2v");e=1f;6 b=14.1e("1p:2w");b.15.4j="4k(#2V#4l)";7(!b.4m){11}b=1f;6 h=(14.6d||0)<8;14.6e((\'<15 1y="1C/2P">2x{1C-3i:0;}@1L 2U{1p\\\\:2w,1p\\\\:4n,1p\\\\:2y,1p\\\\:4o{4j:4k(#2V#4l);1v:1S;6f:1k;1O:2z;}2x{1O:2z;1C-3j:1o;}17{1v:1F-1S;1O:3k;4p-3j:\'+(h?"4q":"1C-6g")+";}17 2A{1O:2z;1o:-4r;21-4s:3l;}a 17{6h:6i}}@1L 4t{17 2x{1v:1Z;}}</15>").1j(/;/g,"!4u;"));12 c(i,j){11 a(i,/(?:2r|6j|%)$|^[a-z-]+$/i.1B(j)?"4v":j)}12 a(l,m){7(m==="0"){11 0}7(/1n$/i.1B(m)){11 1x(m)}6 k=l.15.1o,j=l.3m.1o;l.3m.1o=l.2M.1o;l.15.1o=m.1j("%","2r");6 i=l.15.6k;l.15.1o=k;l.3m.1o=j;11 i}12 f(l,k,j,n){6 i="6l"+n,m=k[i];7(4w(m)){m=k.19(n);k[i]=m=(m=="22")?0:~~j.1Q(a(l,m))}11 m}6 g={};12 d(p){6 q=p.3C;7(!g[q]){6 n=p.2j,o=14.1e("1p:2y"),i=[];o.1y="2i";o.6m=6n;o.6o="0";o.6p="6q";o.1d=n[0][1];18(6 m=1,l=n.1c-1;m<l;++m){i.1t(n[m][0]*2K+"% "+n[m][1])}o.6r=i.3S(",");o.4x=n[l][1];g[q]=o}11 g[q]}11 12(b,G,Y,C,K,e,W){6 n=(G===1f);7(n){G=K.2B}6 I=b.30;6 p=Y.4y||(Y.4y=1u 1q.1w.2H(c(e,Y.19("4z"))+"1n",b.2X));6 y,q;7(n){y=K;q=K.1M}1b{y=14.1e("17");y.1J="17 17-2v";y.2B=G;q=14.1e("2x");y.1g(q);7(C.3d){6 Z=14.1e("2A");Z.1g(14.2k(G));y.1g(Z)}7(!W){y.1g(14.1e("1p:2w"))}}6 g=y.15;6 R=q.15;6 l=p.1i(I.1a),2a=1l.1P(l);6 V=2a/l;6 P=V*1q.1w.1W(Y.19("1W"));6 U=I.23,T=I.1T;R.1a=2a;R.4A=1l.2b(p.1i(T-b.24));R.1o=1l.2b(p.1i(U));g.1a=p.1i(b.1a)+"1n";6 F=Y.19("1d");6 i=1q.1w.2o(G,Y).1K("");6 L=b.33(i,f(e,Y,p,"4B"),f(e,Y,p,"4C"));7(!L.1c){11 1f}6 k=L.35;6 x=-U+k+(I.1s-L[L.1c-1]);6 j=p.1i(x*P),X=1l.2b(j);6 O=x+","+I.1a,m;6 J="r"+O+"6s";6 u=C.29&&d(C.29);6 o=b.20,S=0;6 H=C.1D;6 3n=-1,3o=0,w;1R(w=i[++3n]){6 D=o[i[3n]]||b.34,v;7(!D){26}7(n){v=q.6t[3o];1R(v.1M){v.2l(v.1M)}}1b{v=14.1e("1p:2w");q.1g(v)}v.4D="f";v.4m=O;v.6u=m=(U-S)+","+T;v.6v=(D.d?"m"+D.d+"6w":"")+"m"+m+J;v.6x=F;7(u){v.1g(u.6y(1h))}6 3p=v.15;3p.1s=X;3p.1a=2a;7(H){6 s=H[0],r=H[1];6 B=1q.1w.1d(s.1d),z;6 N=14.1e("1p:4o");N.42="t";N.1d=B.1d;N.6z=s.2m+","+s.2n;7(r){z=1q.1w.1d(r.1d);N.1y="6A";N.4x=z.1d;N.6B=r.2m+","+r.2n}N.1V=B.1V||(z&&z.1V)||1;v.1g(N)}S+=L[3o++]}6 M=v.2T,t,A;7(C.3c){7(!M){M=14.1e("1p:4n");M.4D="f";M.1J="17-2v-6C";t=14.1e("1p:2y");t.1V=0;M.1g(t);q.1g(M)}A=M.15;A.1s=X;A.1a=2a}1b{7(M){q.2l(M)}}g.1s=1l.4E(1l.1P(p.1i(k*P)),0);7(h){6 Q=Y.4F;7(Q===1Y){6 E=Y.19("6D");7(E=="22"){E="4v"}1b{7(!4w(E)){E+="2r"}}Y.4F=Q=0.5*(a(e,E)-1x(g.1a))}7(Q){g.6E=1l.1P(Q)+"1n";g.6F=Q+"1n"}}11 y}})());1q.3g("1H",(12(){6 b=14.1e("1H");7(!b||!b.3q||!b.3q.1A){11}b=1f;6 a=1q.1w.3J("1v","1F-1S");6 e=!a&&(14.6G=="6H"||/6I|6J/i.1B(14.6K.6L));6 f=14.1e("15");f.1y="1C/2P";f.1g(14.2k(("17{1C-3i:0;}@1L 2U,6M{17{1v:1F;1v:1F-1S;1O:3k;4p-3j:4q;"+(e?"":"21-4s:3l;6N-1a:3l;")+"}17 2A{1v:-6O-1F-6P;1v:1F-1S;1s:0;1a:0;6Q:6R;1C-3i:-4r;}"+(a?"17 1H{1O:3k;}":"17 1H{1O:2z;}")+"}@1L 4t{17{6S:0;}17 1H{1v:1Z;}}").1j(/;/g,"!4u;")));14.44("2Q")[0].1g(f);12 d(p,h){6 n=0,m=0;6 g=[],o=/([6T])([^a-z]*)/g,k;4G:18(6 j=0;k=o.2N(p);++j){6 l=k[2].1K(",");3O(k[1]){1N"v":g[j]={m:"6U",a:[n+~~l[0],m+~~l[1],n+~~l[2],m+~~l[3],n+=~~l[4],m+=~~l[5]]};1G;1N"r":g[j]={m:"6V",a:[n+=~~l[0],m+=~~l[1]]};1G;1N"m":g[j]={m:"6W",a:[n=~~l[0],m=~~l[1]]};1G;1N"x":g[j]={m:"6X"};1G;1N"e":1G 4G}h[g[j].m].1A(h,g[j].a)}11 g}12 c(m,k){18(6 j=0,h=m.1c;j<h;++j){6 g=m[j];k[g.m].1A(k,g.a)}}11 12(V,w,P,t,C,W){6 k=(w===1f);7(k){w=C.6Y("2B")}6 A=V.30;6 m=P.40("4z",V.2X);6 B=0,O=0,N=0,u=0;6 z=t.1D,L=[];7(z){18(6 U=z.1c;U--;){6 F=z[U];6 K=m.1Q(1x(F.2m));6 I=m.1Q(1x(F.2n));L[U]=[K,I];7(I<B){B=I}7(K>O){O=K}7(I>N){N=I}7(K<u){u=K}}}6 Z=1q.1w.2o(w,P).1K("");6 E=V.33(Z,~~m.1Q(1x(P.19("4B"))||0),~~m.1Q(1x(P.19("4C"))||0));7(!E.1c){11 1f}6 h=E.35;O+=A.1s-E[E.1c-1];u+=A.23;6 s,n;7(k){s=C;n=C.1M}1b{s=14.1e("17");s.1J="17 17-1H";s.6Z("2B",w);n=14.1e("1H");s.1g(n);7(t.3d){6 S=14.1e("2A");S.1g(14.2k(w));s.1g(S)}}6 b=s.15;6 H=n.15;6 j=m.1i(A.1a);6 Y=1l.1P(j);6 M=Y/j;6 G=M*1q.1w.1W(P.19("1W"));6 J=h*G;6 Q=1l.1P(m.1i(J+O-u));6 o=1l.1P(m.1i(A.1a-B+N));n.1s=Q;n.1a=o;H.1s=Q+"1n";H.1a=o+"1n";B+=A.1T;H.4A=1l.2b(m.1i(B-V.24))+"1n";H.1o=1l.2b(m.1i(u))+"1n";6 r=1l.4E(1l.1P(m.1i(J)),0)+"1n";7(a){b.1s=r;b.1a=m.1i(V.1a)+"1n"}1b{b.70=r;b.71=(m.1i(V.1a)-1)+"1n"}6 X=n.3q("2d"),D=j/A.1a;X.4H(D,D*M);X.3r(-u,-B);X.4I();12 T(){6 x=V.20,a,l=-1,g=-1,y;X.4H(G,1);1R(y=Z[++l]){6 a=x[Z[l]]||V.34;7(!a){26}7(a.d){X.72();7(a.3s){c(a.3s,X)}1b{a.3s=d("m"+a.d,X)}X.2y()}X.3r(E[++g],0)}X.73()}7(z){18(6 U=z.1c;U--;){6 F=z[U];X.4I();X.3t=F.1d;X.3r.1A(X,L[U]);T()}}6 q=t.29;7(q){6 v=q.2j,p=X.74(0,A.1T,0,A.31);18(6 U=0,R=v.1c;U<R;++U){p.76.1A(p,v[U])}X.3t=p}1b{X.3t=P.19("1d")}T();11 s}})());',62,441,'||||||var|if||||||||||||||||||||||||||||||||||||||||||||||||||||||||return|function|this|document|style||cufon|for|get|height|else|length|color|createElement|null|appendChild|false|convert|replace|true|Math|arguments|px|left|cvml|Cufon|window|width|push|new|display|CSS|parseFloat|type|parseInt|apply|test|text|textShadow|toLowerCase|inline|break|canvas|ready|className|split|media|firstChild|case|position|ceil|convertFrom|while|block|minY|addEventListener|opacity|fontStretch|typeof|undefined|none|glyphs|font|normal|minX|ascent||continue|add|engine|textGradient|af|round|setTimeout||callee|value|condensed|expanded|gradient|stops|createTextNode|removeChild|offX|offY|textTransform|in|nodeName|em|hover|YAHOO|string|vml|shape|cufoncanvas|fill|absolute|cufontext|alt|readyState|try|body|catch|root|Size|match|addClass|100|getStyle|currentStyle|exec|recognizesMedia|css|head|disabled|textAlign|nextSibling|screen|default|u00a0|baseSize|family|weight|viewBox|maxY|descent|spacing|missingGlyph|total|oblique|italic|400|options|fontFamily|words|forceHitArea|printable|query|util|registerEngine|set|indent|align|relative|1px|runtimeStyle|bc|aa|bd|getContext|translate|code|fillStyle|shift|createStyleSheet|unit|toString|ultra|extra|semi|getComputedStyle|id|f0|ig|quotedList|sheet|styleSheet|removeClass|supports|toUpperCase|whiteSpace|all|search|switch|isUsable|face|maxX|join|contains|mouseover|mouseenter|attach|repeat|cufid|extend|getSize|attachEvent|on|hoverables|getElementsByTagName|separate|ignore|textless|nodeType|data|autoDetect|selector|jQuery|dojo|Ext|Selector|querySelectorAll|loading|delete|behavior|url|VML|coordsize|rect|shadow|vertical|middle|10000in|size|print|important|1em|isNaN|color2|computedFontSize|fontSize|top|letterSpacing|wordSpacing|stroked|max|computedYAdjust|generate|scale|save|DOM|loaded|complete|DOMContentLoaded|pageshow|opera|doScroll|load|documentElement|String|rgba|rgb|number|625|875|125|defaultView|substr|indexOf|reverse|insertBefore|RegExp|span|right|blur|uppercase|lowercase|capitalize|run|br|previousSibling|link|cssRules|mediaText|rel|stylesheet|u0020|u3000|units|per|bbox|bold|700|99|500|sort|compareDocumentPosition|relatedTarget|onmouseenter|mouseout|mouseleave|call|event|fontStyle|fontWeight|hasOwnProperty|createDocumentFragment|unshift|appendData|replaceChild|applet|col|colgroup|iframe|map|optgroup|option|script|select|textarea|title|pre|Sizzle|dl|html|ol|table|tbody|thead|tfoot|tr|ul|characters|now|refresh|registerFont|active|namespaces|urn|schemas|microsoft|com|documentMode|write|antialias|bottom|cursor|pointer|ex|pixelLeft|computed|angle|180|focus|method|sigma|colors|ns|childNodes|coordorigin|path|xe|fillcolor|cloneNode|offset|double|offset2|cover|lineHeight|marginTop|marginBottom|compatMode|BackCompat|frameset|transitional|doctype|publicId|projection|line|moz|box|overflow|hidden|padding|mrvxe|bezierCurveTo|lineTo|moveTo|closePath|getAttribute|setAttribute|paddingLeft|paddingBottom|beginPath|restore|createLinearGradient||addColorStop'.split('|'),0,{}))
/*
if (jQuery.browser.msie && jQuery.browser.version <= 7){
} else {
	Cufon.replace ('#middle h1, #bottom h1, #middle h2, #bottom h2, #middle h3, #bottom h3, #middle h4, #bottom h4, #middle h5, #bottom h5, #middle h6, #bottom h6, #middle .quotation, #bottom .quotation, #middle .dropcap, #bottom .dropcap', { textShadow: '1px 1px rgba(0, 0, 0, 0.4)' });
	Cufon.replace ('#middle .but_large_trans, #bottom .but_large_trans, #middle .but_medium_trans, #bottom .but_medium_trans', { hover: {color: '#010101', textShadow: '1px 1px rgba(255, 255, 255, 0.4)'}, textShadow: '1px 1px rgba(0, 0, 0, 0.4)' });
	Cufon.replace ('#middle .but_large_white, #bottom .but_large_white, #middle .but_medium_white, #bottom .but_medium_white', { textShadow: '1px 1px rgba(255, 255, 255, 0.4)' });
}
*/



/*
 * Open source under the BSD License. 
 * 
 * Copyright (c) 2008 George McGinley Smith
*/
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('h.i[\'E\']=h.i[\'y\'];h.F(h.i,{z:\'A\',y:9(x,t,b,c,d){6 h.i[h.i.z](x,t,b,c,d)},G:9(x,t,b,c,d){6 c*(t/=d)*t+b},A:9(x,t,b,c,d){6-c*(t/=d)*(t-2)+b},H:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t+b;6-c/2*((--t)*(t-2)-1)+b},I:9(x,t,b,c,d){6 c*(t/=d)*t*t+b},J:9(x,t,b,c,d){6 c*((t=t/d-1)*t*t+1)+b},K:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t+b;6 c/2*((t-=2)*t*t+2)+b},L:9(x,t,b,c,d){6 c*(t/=d)*t*t*t+b},M:9(x,t,b,c,d){6-c*((t=t/d-1)*t*t*t-1)+b},N:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t*t+b;6-c/2*((t-=2)*t*t*t-2)+b},O:9(x,t,b,c,d){6 c*(t/=d)*t*t*t*t+b},P:9(x,t,b,c,d){6 c*((t=t/d-1)*t*t*t*t+1)+b},Q:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t*t*t+b;6 c/2*((t-=2)*t*t*t*t+2)+b},R:9(x,t,b,c,d){6-c*8.B(t/d*(8.g/2))+c+b},S:9(x,t,b,c,d){6 c*8.n(t/d*(8.g/2))+b},T:9(x,t,b,c,d){6-c/2*(8.B(8.g*t/d)-1)+b},U:9(x,t,b,c,d){6(t==0)?b:c*8.j(2,10*(t/d-1))+b},V:9(x,t,b,c,d){6(t==d)?b+c:c*(-8.j(2,-10*t/d)+1)+b},W:9(x,t,b,c,d){e(t==0)6 b;e(t==d)6 b+c;e((t/=d/2)<1)6 c/2*8.j(2,10*(t-1))+b;6 c/2*(-8.j(2,-10*--t)+2)+b},X:9(x,t,b,c,d){6-c*(8.o(1-(t/=d)*t)-1)+b},Y:9(x,t,b,c,d){6 c*8.o(1-(t=t/d-1)*t)+b},Z:9(x,t,b,c,d){e((t/=d/2)<1)6-c/2*(8.o(1-t*t)-1)+b;6 c/2*(8.o(1-(t-=2)*t)+1)+b},11:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d)==1)6 b+c;e(!p)p=d*.3;e(a<8.r(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.u(c/a);6-(a*8.j(2,10*(t-=1))*8.n((t*d-s)*(2*8.g)/p))+b},12:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d)==1)6 b+c;e(!p)p=d*.3;e(a<8.r(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.u(c/a);6 a*8.j(2,-10*t)*8.n((t*d-s)*(2*8.g)/p)+c+b},13:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d/2)==2)6 b+c;e(!p)p=d*(.3*1.5);e(a<8.r(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.u(c/a);e(t<1)6-.5*(a*8.j(2,10*(t-=1))*8.n((t*d-s)*(2*8.g)/p))+b;6 a*8.j(2,-10*(t-=1))*8.n((t*d-s)*(2*8.g)/p)*.5+c+b},14:9(x,t,b,c,d,s){e(s==v)s=1.l;6 c*(t/=d)*t*((s+1)*t-s)+b},15:9(x,t,b,c,d,s){e(s==v)s=1.l;6 c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},16:9(x,t,b,c,d,s){e(s==v)s=1.l;e((t/=d/2)<1)6 c/2*(t*t*(((s*=(1.C))+1)*t-s))+b;6 c/2*((t-=2)*t*(((s*=(1.C))+1)*t+s)+2)+b},D:9(x,t,b,c,d){6 c-h.i.w(x,d-t,0,c,d)+b},w:9(x,t,b,c,d){e((t/=d)<(1/2.k)){6 c*(7.q*t*t)+b}m e(t<(2/2.k)){6 c*(7.q*(t-=(1.5/2.k))*t+.k)+b}m e(t<(2.5/2.k)){6 c*(7.q*(t-=(2.17/2.k))*t+.18)+b}m{6 c*(7.q*(t-=(2.19/2.k))*t+.1a)+b}},1b:9(x,t,b,c,d){e(t<d/2)6 h.i.D(x,t*2,0,c,d)*.5+b;6 h.i.w(x,t*2-d,0,c,d)*.5+c*.5+b}});',62,74,'||||||return||Math|function|||||if|var|PI|jQuery|easing|pow|75|70158|else|sin|sqrt||5625|abs|||asin|undefined|easeOutBounce||swing|def|easeOutQuad|cos|525|easeInBounce|jswing|extend|easeInQuad|easeInOutQuad|easeInCubic|easeOutCubic|easeInOutCubic|easeInQuart|easeOutQuart|easeInOutQuart|easeInQuint|easeOutQuint|easeInOutQuint|easeInSine|easeOutSine|easeInOutSine|easeInExpo|easeOutExpo|easeInOutExpo|easeInCirc|easeOutCirc|easeInOutCirc||easeInElastic|easeOutElastic|easeInOutElastic|easeInBack|easeOutBack|easeInOutBack|25|9375|625|984375|easeInOutBounce'.split('|'),0,{}))



/*
 * Copyright (c) 2008 Joel Birch
 * 
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';(2($){$.k.z=2(d){4 e=$.k.z,c=e.c,$N=$([\'<O 1k="\',c.P,\'"> &#1l;</O>\'].g(\'\')),q=2(){4 a=$(3),l=A(a);Q(l.B);a.R().1m().r()},C=2(){4 a=$(3),l=A(a),o=e.9;Q(l.B);l.B=1n(2(){o.D=($.1o(a[0],o.$m)>-1);a.r();t(o.$m.E&&a.F([\'h.\',o.j].g(\'\')).E<1){q.8(o.$m)}},o.S)},A=2(a){4 b=a.F([\'5.\',c.G,\':T\'].g(\'\'))[0];e.9=e.o[b.U];u b},V=2(a){a.v(c.W).1p($N.1q())};u 3.n(2(){4 s=3.U=e.o.E;4 o=$.X({},e.Y,d);o.$m=$(\'h.\'+o.H,3).1r(0,o.Z).n(2(){$(3).v([o.j,c.I].g(\' \')).1s(\'h:10(5)\').11(o.H)});e.o[s]=e.9=o;$(\'h:10(5)\',3)[($.k.12&&!o.13)?\'12\':\'1t\'](q,C).n(2(){t(o.14)V($(\'>a:T-1u\',3))}).w(\'.\'+c.I).r();4 b=$(\'a\',3);b.n(2(i){4 a=b.15(i).F(\'h\');b.15(i).1v(2(){q.8(a)}).1w(2(){C.8(a)})});o.16.8(3)}).n(2(){4 a=[c.G];t(e.9.J&&!($.x.17&&$.x.18<7))a.1x(c.y);$(3).v(a.g(\' \'))})};4 f=$.k.z;f.o=[];f.9={};f.K=2(){4 o=f.9;t($.x.17&&$.x.18>6&&o.J&&o.L.19!=1y)3.1z(f.c.y+\'-1a\')};f.c={I:\'p-1A\',G:\'p-1B-1C\',W:\'p-1D-5\',P:\'p-1E-1F\',y:\'p-1G\'};f.Y={j:\'1H\',H:\'1I\',Z:1,S:1J,L:{19:\'1K\'},1b:\'1L\',14:M,J:M,13:1c,16:2(){},1d:2(){},1e:2(){},1f:2(){}};$.k.X({r:2(){4 o=f.9,w=(o.D===M)?o.$m:\'\';o.D=1c;4 a=$([\'h.\',o.j].g(\'\'),3).1M(3).w(w).11(o.j).1g(\'>5\').1N().1h(\'1i\',\'1j\');o.1f.8(a);u 3},R:2(){4 o=f.9,1O=f.c.y+\'-1a\',$5=3.v(o.j).1g(\'>5:1j\').1h(\'1i\',\'1P\');f.K.8($5);o.1d.8($5);$5.1Q(o.L,o.1b,2(){f.K.8($5);o.1e.8($5)});u 3}})})(1R);',62,116,'||function|this|var|ul|||call|op|||||||join|li||hoverClass|fn|menu|path|each||sf|over|hideSuperfishUl||if|return|addClass|not|browser|shadowClass|superfish|getMenu|sfTimer|out|retainPath|length|parents|menuClass|pathClass|bcClass|dropShadows|IE7fix|animation|true|arrow|span|arrowClass|clearTimeout|showSuperfishUl|delay|first|serial|addArrow|anchorClass|extend|defaults|pathLevels|has|removeClass|hoverIntent|disableHI|autoArrows|eq|onInit|msie|version|opacity|off|speed|false|onBeforeShow|onShow|onHide|find|css|visibility|hidden|class|187|siblings|setTimeout|inArray|append|clone|slice|filter|hover|child|focus|blur|push|undefined|toggleClass|breadcrumb|js|enabled|with|sub|indicator|shadow|sfHover|overideThisToUse|800|show|normal|add|hide|sh|visible|animate|jQuery'.split('|'),0,{}))

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';(3($){$.5.6=3(k){1 l=$.r({},$.5.6.s,k);G 7.8(3(){1 h=$(7);1 o=$.H?$.r({},l,h.I()):l;1 j=$(\'<t J="u-v">&#K;</t>\').2({\'L\':0,\'M\':\'N\',\'O\':\'-P\',\'4\':\'w\'}).Q(h).4();$(\'#u-v\').R();$m=h.S(\'x\');$m.8(3(i){1 c=$m.T(i);1 d=c.y();1 e=d.y(\'a\');1 f=d.2(\'z-A\',\'U\').2(\'n\');1 g=c.B(d).B(e).2({\'n\':\'V\',\'4\':\'w\'}).C().C()[0].W/j;g+=o.D;E(g>o.p){g=o.p}X E(g<o.q){g=o.q}g+=\'Y\';c.2(\'4\',g);d.2({\'n\':f,\'4\':\'Z%\',\'z-A\':\'10\'}).8(3(){1 a=$(\'>x\',7);1 b=a.2(\'F\')!==11?\'F\':\'12\';a.2(b,g)})})})};$.5.6.s={q:9,p:13,D:0}})(14);',62,67,'|var|css|function|width|fn|supersubs|this|each||||||||||||||ULs|float||maxWidth|minWidth|extend|defaults|li|menu|fontsize|auto|ul|children|white|space|add|end|extraWidth|if|left|return|meta|data|id|8212|padding|position|absolute|top|999em|appendTo|remove|find|eq|nowrap|none|clientWidth|else|em|100|normal|undefined|right|25|jQuery'.split('|'),0,{}))

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(3($){$.I.J=3(f,g){4 c={u:7,o:K,v:0};c=$.w(c,g?{x:f,y:g}:f);4 d,8,9,l;4 h=3(a){d=a.z;8=a.A};4 i=3(a,b){b.2=q(b.2);5((B.C(9-d)+B.C(l-8))<c.u){$(b).D("r",h);b.m=1;n c.x.E(b,[a])}F{9=d;l=8;b.2=s(3(){i(a,b)},c.o)}};4 j=3(a,b){b.2=q(b.2);b.m=0;n c.y.E(b,[a])};4 k=3(e){4 p=(e.G=="t"?e.L:e.M)||e.N;O(p&&p!=6){P{p=p.Q}R(e){p=6}}5(p==6){n S}4 a=H.w({},e);4 b=6;5(b.2){b.2=q(b.2)}5(e.G=="t"){9=a.z;l=a.A;$(b).T("r",h);5(b.m!=1){b.2=s(3(){i(a,b)},c.o)}}F{$(b).D("r",h);5(b.m==1){b.2=s(3(){j(a,b)},c.v)}}};n 6.t(k).U(k)}})(H);',57,57,'||hoverIntent_t|function|var|if|this||cY|pX||||||||||||pY|hoverIntent_s|return|interval||clearTimeout|mousemove|setTimeout|mouseover|sensitivity|timeout|extend|over|out|pageX|pageY|Math|abs|unbind|apply|else|type|jQuery|fn|hoverIntent|100|fromElement|toElement|relatedTarget|while|try|parentNode|catch|false|bind|mouseout'.split('|'),0,{}))

jQuery(document).ready(function(){
	jQuery('ul#navigation').superfish({ 
		delay:500, 
		animation:{opacity: 'show', height: 'show'}, 
		speed:'fast', 
		autoArrows:false, 
		dropShadows:false 
	}); 
}); 



/*
 * Slides, A Slideshow Plugin for jQuery
 * By: Nathan Searles, http://nathansearles.com
 * Updated: March 7th, 2011
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 */
(function($){$.fn.slides=function(g){g=$.extend({},$.fn.slides.option,g);return this.each(function(){$('.'+g.container,$(this)).children().wrapAll('<div class="slides_control"/>');var d=$(this),control=$('.slides_control',d),total=control.children().size(),width=control.children().outerWidth(),height=control.children().outerHeight(),start=g.start-1,effect=g.effect.indexOf(',')<0?g.effect:g.effect.replace(' ','').split(',')[0],paginationEffect=g.effect.indexOf(',')<0?effect:g.effect.replace(' ','').split(',')[1],next=0,prev=0,number=0,current=0,loaded,active,clicked,position,direction,imageParent,pauseTimeout,playInterval;function animate(a,b,c){if(!active&&loaded){active=true;g.animationStart(current+1);switch(a){case'next':prev=current;next=current+1;next=total===next?0:next;position=width*2;a=-width*2;current=next;break;case'prev':prev=current;next=current-1;next=next===-1?total-1:next;position=0;a=0;current=next;break;case'pagination':next=parseInt(c,10);prev=$('.'+g.paginationClass+' li.current a',d).attr('href').match('[^#/]+$');if(next>prev){position=width*2;a=-width*2}else{position=0;a=0}current=next;break}if(b==='fade'){if(g.crossfade){control.children(':eq('+next+')',d).css({zIndex:10}).fadeIn(g.fadeSpeed,g.fadeEasing,function(){if(g.autoHeight){control.animate({height:control.children(':eq('+next+')',d).outerHeight()},g.autoHeightSpeed,function(){control.children(':eq('+prev+')',d).css({display:'none',zIndex:0});control.children(':eq('+next+')',d).css({zIndex:0});g.animationComplete(next+1);active=false})}else{control.children(':eq('+prev+')',d).css({display:'none',zIndex:0});control.children(':eq('+next+')',d).css({zIndex:0});g.animationComplete(next+1);active=false}})}else{control.children(':eq('+prev+')',d).fadeOut(g.fadeSpeed,g.fadeEasing,function(){if(g.autoHeight){control.animate({height:control.children(':eq('+next+')',d).outerHeight()},g.autoHeightSpeed,function(){control.children(':eq('+next+')',d).fadeIn(g.fadeSpeed,g.fadeEasing)})}else{control.children(':eq('+next+')',d).fadeIn(g.fadeSpeed,g.fadeEasing,function(){if($.browser.msie){$(this).get(0).style.removeAttribute('filter')}})}g.animationComplete(next+1);active=false})}}else{control.children(':eq('+next+')').css({left:position,display:'block'});if(g.autoHeight){control.animate({left:a,height:control.children(':eq('+next+')').outerHeight()},g.slideSpeed,g.slideEasing,function(){control.css({left:-width});control.children(':eq('+next+')').css({left:width,zIndex:5});control.children(':eq('+prev+')').css({left:width,display:'none',zIndex:0});g.animationComplete(next+1);active=false})}else{control.animate({left:a},g.slideSpeed,g.slideEasing,function(){control.css({left:-width});control.children(':eq('+next+')').css({left:width,zIndex:5});control.children(':eq('+prev+')').css({left:width,display:'none',zIndex:0});g.animationComplete(next+1);active=false})}}if(g.pagination){$('.'+g.paginationClass+' li.current',d).removeClass('current');$('.'+g.paginationClass+' li:eq('+next+')',d).addClass('current')}}}function stop(){clearInterval(d.data('interval'))}function pause(){if(g.pause){clearTimeout(d.data('pause'));clearInterval(d.data('interval'));pauseTimeout=setTimeout(function(){clearTimeout(d.data('pause'));playInterval=setInterval(function(){animate("next",effect)},g.play);d.data('interval',playInterval)},g.pause);d.data('pause',pauseTimeout)}else{stop()}}if(total<2){return}if(start<0){start=0}if(start>total){start=total-1}if(g.start){current=start}if(g.randomize){control.randomize()}$('.'+g.container,d).css({overflow:'hidden',position:'relative'});control.children().css({position:'absolute',top:0,left:control.children().outerWidth(),zIndex:0,display:'none'});control.css({position:'relative',width:(width*3),height:height,left:-width});$('.'+g.container,d).css({display:'block'});if(g.autoHeight){control.children().css({height:'auto'});control.animate({height:control.children(':eq('+start+')').outerHeight()},g.autoHeightSpeed)}if(g.preload&&control.find('img').length){$('.'+g.container,d).css({background:'url('+g.preloadImage+') no-repeat 50% 50%'});var f=control.find('img:eq('+start+')').attr('src')+'?'+(new Date()).getTime();if($('img',d).parent().attr('class')!='slides_control'){imageParent=control.children(':eq(0)')[0].tagName.toLowerCase()}else{imageParent=control.find('img:eq('+start+')')}control.find('img:eq('+start+')').attr('src',f).load(function(){control.find(imageParent+':eq('+start+')').fadeIn(g.fadeSpeed,g.fadeEasing,function(){$(this).css({zIndex:5});$('.'+g.container,d).css({background:''});loaded=true;g.slidesLoaded()})})}else{control.children(':eq('+start+')').fadeIn(g.fadeSpeed,g.fadeEasing,function(){loaded=true;g.slidesLoaded()})}if(g.bigTarget){control.children().css({cursor:'pointer'});control.children().click(function(){animate('next',effect);return false})}if(g.hoverPause&&g.play){control.bind('mouseover',function(){stop()});control.bind('mouseleave',function(){pause()})}if(g.generateNextPrev){$('.'+g.container,d).after('<a href="#" class="'+g.prev+'">Prev</a>');$('.'+g.prev,d).after('<a href="#" class="'+g.next+'">Next</a>')}$('.'+g.next,d).click(function(e){e.preventDefault();if(g.play){pause()}animate('next',effect)});$('.'+g.prev,d).click(function(e){e.preventDefault();if(g.play){pause()}animate('prev',effect)});if(g.generatePagination){d.append('<ul class='+g.paginationClass+'></ul>');control.children().each(function(){$('.'+g.paginationClass,d).append('<li><a href="#'+number+'">'+(number+1)+'</a></li>');number++})}else{$('.'+g.paginationClass+' li a',d).each(function(){$(this).attr('href','#'+number);number++})}$('.'+g.paginationClass+' li:eq('+start+')',d).addClass('current');$('.'+g.paginationClass+' li a',d).click(function(){if(g.play){pause()}clicked=$(this).attr('href').match('[^#/]+$');if(current!=clicked){animate('pagination',paginationEffect,clicked)}return false});$('a.link',d).click(function(){if(g.play){pause()}clicked=$(this).attr('href').match('[^#/]+$')-1;if(current!=clicked){animate('pagination',paginationEffect,clicked)}return false});if(g.play){playInterval=setInterval(function(){animate('next',effect)},g.play);d.data('interval',playInterval)}})};$.fn.slides.option={preload:false,preloadImage:'/img/loading.gif',container:'slides_container',generateNextPrev:false,next:'next',prev:'prev',pagination:true,generatePagination:true,paginationClass:'pagination',fadeSpeed:350,fadeEasing:'',slideSpeed:350,slideEasing:'',start:1,effect:'slide',crossfade:false,randomize:false,play:0,pause:0,hoverPause:false,autoHeight:false,autoHeightSpeed:350,bigTarget:false,animationStart:function(){},animationComplete:function(){},slidesLoaded:function(){}};$.fn.randomize=function(c){function randomizeOrder(){return(Math.round(Math.random())-0.5)}return($(this).each(function(){var $this=$(this);var $children=$this.children();var a=$children.length;if(a>1){$children.hide();var b=[];for(i=0;i<a;i++){b[b.length]=i}b=b.sort(randomizeOrder);$.each(b,function(j,k){var $child=$children.eq(k);var $clone=$child.clone(true);$clone.show().appendTo($this);if(c!==undefined){c($child,$clone)}$child.remove()})}}))}})(jQuery);



/*
 * Copyright 2011, Gilbert Pellegrom
 * 
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */
(function(a){var A=function(s,v){var f=a.extend({},a.fn.nivoSlider.defaults,v),g={currentSlide:0,currentImage:"",totalSlides:0,randAnim:"",running:false,paused:false,stop:false},e=a(s);e.data("nivo:vars",g);e.css("position","relative");e.addClass("nivoSlider");var j=e.children();j.each(function(){var b=a(this),h="";if(!b.is("img")){if(b.is("a")){b.addClass("nivo-imageLink");h=b}b=b.find("img:first")}var c=b.width();if(c==0)c=b.attr("width");var o=b.height();if(o==0)o=b.attr("height");c>e.width()&&e.width(c);o>e.height()&&e.height(o);h!=""&&h.css("display","none");b.css("display","none");g.totalSlides++});if(f.startSlide>0){if(f.startSlide>=g.totalSlides)f.startSlide=g.totalSlides-1;g.currentSlide=f.startSlide}g.currentImage=a(j[g.currentSlide]).is("img")?a(j[g.currentSlide]):a(j[g.currentSlide]).find("img:first");a(j[g.currentSlide]).is("a")&&a(j[g.currentSlide]).css("display","block");e.css("background",'url("'+g.currentImage.attr("src")+'") no-repeat');for(var k=0;k<f.slices;k++){var p=Math.round(e.width()/f.slices);k==f.slices-1?e.append(a('<div class="nivo-slice"></div>').css({left:p*k+"px",width:e.width()-p*k+"px"})):e.append(a('<div class="nivo-slice"></div>').css({left:p*k+"px",width:p+"px"}))}e.append(a('<div class="nivo-caption"><p></p></div>').css({display:"none",opacity:f.captionOpacity}));if(g.currentImage.attr("title")!=""){k=g.currentImage.attr("title");if(k.substr(0,1)=="#")k=a(k).html();a(".nivo-caption p",e).html(k);a(".nivo-caption",e).fadeIn(f.animSpeed)}var l=0;if(!f.manualAdvance&&j.length>1)l=setInterval(function(){r(e,j,f,false)},f.pauseTime);if(f.directionNav){e.append('<div class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>');if(f.directionNavHide){a(".nivo-directionNav",e).hide();e.hover(function(){a(".nivo-directionNav",e).show()},function(){a(".nivo-directionNav",e).hide()})}a("a.nivo-prevNav",e).live("click",function(){if(g.running)return false;clearInterval(l);l="";g.currentSlide-=2;r(e,j,f,"prev")});a("a.nivo-nextNav",e).live("click",function(){if(g.running)return false;clearInterval(l);l="";r(e,j,f,"next")})}if(f.controlNav){p=a('<div class="nivo-controlNav"></div>');e.append(p);for(k=0;k<j.length;k++)if(f.controlNavThumbs){e.addClass('nivo_thumbs');var t=j.eq(k);t.is("img")||(t=t.find("img:first"));f.controlNavThumbsFromRel?p.append('<a class="nivo-control" rel="'+k+'"><img src="'+t.attr("rel")+'" alt="" /></a>'):p.append('<a class="nivo-control" rel="'+k+'"><img src="'+t.attr("src").replace(f.controlNavThumbsSearch,f.controlNavThumbsReplace)+'" alt="" /></a>')}else p.append('<a class="nivo-control" rel="'+k+'">'+(k+1)+"</a>");a(".nivo-controlNav a:eq("+g.currentSlide+")",e).addClass("active");a(".nivo-controlNav a",e).live("click",function(){if(g.running)return false;if(a(this).hasClass("active"))return false;clearInterval(l);l="";e.css("background",'url("'+g.currentImage.attr("src")+'") no-repeat');g.currentSlide=a(this).attr("rel")-1;r(e,j,f,"control")})}f.keyboardNav&&a(window).keypress(function(b){if(b.keyCode=="37"){if(g.running)return false;clearInterval(l);l="";g.currentSlide-=2;r(e,j,f,"prev")}if(b.keyCode=="39"){if(g.running)return false;clearInterval(l);l="";r(e,j,f,"next")}});f.pauseOnHover&&e.hover(function(){g.paused=true;clearInterval(l);l=""},function(){g.paused=false;if(l==""&&!f.manualAdvance)l=setInterval(function(){r(e,j,f,false)},f.pauseTime)});e.bind("nivo:animFinished",function(){g.running=false;a(j).each(function(){a(this).is("a")&&a(this).css("display","none")});a(j[g.currentSlide]).is("a")&&a(j[g.currentSlide]).css("display","block");if(l==""&&!g.paused&&!f.manualAdvance)l=setInterval(function(){r(e,j,f,false)},f.pauseTime);f.afterChange.call(this)});var w=function(b,h){var c=0;a(".nivo-slice",b).each(function(){var o=a(this),d=Math.round(b.width()/h.slices);c==h.slices-1?o.css("width",b.width()-d*c+"px"):o.css("width",d+"px");c++})},r=function(b,h,c,o){var d=b.data("nivo:vars");d&&d.currentSlide==d.totalSlides-1&&c.lastSlide.call(this);if((!d||d.stop)&&!o)return false;c.beforeChange.call(this);if(o){o=="prev"&&b.css("background",'url("'+d.currentImage.attr("src")+'") no-repeat');o=="next"&&b.css("background",'url("'+d.currentImage.attr("src")+'") no-repeat')}else b.css("background",'url("'+d.currentImage.attr("src")+'") no-repeat');d.currentSlide++;if(d.currentSlide==d.totalSlides){d.currentSlide=0;c.slideshowEnd.call(this)}if(d.currentSlide<0)d.currentSlide=d.totalSlides-1;d.currentImage=a(h[d.currentSlide]).is("img")?a(h[d.currentSlide]):a(h[d.currentSlide]).find("img:first");if(c.controlNav){a(".nivo-controlNav a",b).removeClass("active");a(".nivo-controlNav a:eq("+d.currentSlide+")",b).addClass("active")}a('img.nivo_slide',b).removeClass('active');a('img.nivo_slide:eq('+d.currentSlide+')',b).addClass('active');if(d.currentImage.attr("title")!=""){var u=d.currentImage.attr("title");if(u.substr(0,1)=="#")u=a(u).html();a(".nivo-caption",b).css("display")=="block"?a(".nivo-caption p",b).fadeOut(c.animSpeed,function(){a(this).html(u);a(this).fadeIn(c.animSpeed)}):a(".nivo-caption p",b).html(u);a(".nivo-caption",b).fadeIn(c.animSpeed)}else a(".nivo-caption",b).fadeOut(c.animSpeed);var m=0;a(".nivo-slice",b).each(function(){var i=Math.round(b.width()/c.slices);a(this).css({height:"0px",opacity:"0",background:'url("'+d.currentImage.attr("src")+'") no-repeat -'+(i+m*i-i)+"px 0%"});m++});if(c.effect=="random"){h=["sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade","slideInRight","slideInLeft"];d.randAnim=h[Math.floor(Math.random()*(h.length+1))];if(d.randAnim==undefined)d.randAnim="fade"}if(c.effect.indexOf(",")!=-1){h=c.effect.split(",");d.randAnim=h[Math.floor(Math.random()*h.length)];if(d.randAnim==undefined)d.randAnim="fade"}d.running=true;if(c.effect=="sliceDown"||c.effect=="sliceDownRight"||d.randAnim=="sliceDownRight"||c.effect=="sliceDownLeft"||d.randAnim=="sliceDownLeft"){var n=0;m=0;w(b,c);h=a(".nivo-slice",b);if(c.effect=="sliceDownLeft"||d.randAnim=="sliceDownLeft")h=a(".nivo-slice",b)._reverse();h.each(function(){var i=a(this);i.css({top:"0px"});m==c.slices-1?setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},100+n):setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed)},100+n);n+=50;m++})}else if(c.effect=="sliceUp"||c.effect=="sliceUpRight"||d.randAnim=="sliceUpRight"||c.effect=="sliceUpLeft"||d.randAnim=="sliceUpLeft"){m=n=0;w(b,c);h=a(".nivo-slice",b);if(c.effect=="sliceUpLeft"||d.randAnim=="sliceUpLeft")h=a(".nivo-slice",b)._reverse();h.each(function(){var i=a(this);i.css({bottom:"0px"});m==c.slices-1?setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},100+n):setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed)},100+n);n+=50;m++})}else if(c.effect=="sliceUpDown"||c.effect=="sliceUpDownRight"||d.randAnim=="sliceUpDown"||c.effect=="sliceUpDownLeft"||d.randAnim=="sliceUpDownLeft"){var x=m=n=0;w(b,c);h=a(".nivo-slice",b);if(c.effect=="sliceUpDownLeft"||d.randAnim=="sliceUpDownLeft")h=a(".nivo-slice",b)._reverse();h.each(function(){var i=a(this);if(m==0){i.css("top","0px");m++}else{i.css("bottom","0px");m=0}x==c.slices-1?setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},100+n):setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed)},100+n);n+=50;x++})}else if(c.effect=="fold"||d.randAnim=="fold"){m=n=0;w(b,c);a(".nivo-slice",b).each(function(){var i=a(this),y=i.width();i.css({top:"0px",height:"100%",width:"0px"});m==c.slices-1?setTimeout(function(){i.animate({width:y,opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},100+n):setTimeout(function(){i.animate({width:y,opacity:"1.0"},c.animSpeed)},100+n);n+=50;m++})}else if(c.effect=="fade"||d.randAnim=="fade"){var q=a(".nivo-slice:first",b);q.css({height:"100%",width:b.width()+"px"});q.animate({opacity:"1.0"},c.animSpeed*2,"",function(){b.trigger("nivo:animFinished")})}else if(c.effect=="slideInRight"||d.randAnim=="slideInRight"){q=a(".nivo-slice:first",b);q.css({height:"100%",width:"0px",opacity:"1"});q.animate({width:b.width()+"px"},c.animSpeed*2,"",function(){b.trigger("nivo:animFinished")})}else if(c.effect=="slideInLeft"||d.randAnim=="slideInLeft"){q=a(".nivo-slice:first",b);q.css({height:"100%",width:"0px",opacity:"1",left:"",right:"0px"});q.animate({width:b.width()+"px"},c.animSpeed*2,"",function(){q.css({left:"0px",right:""});b.trigger("nivo:animFinished")})}},z=function(b){this.console&&typeof console.log!="undefined"&&console.log(b)};this.stop=function(){if(!a(s).data("nivo:vars").stop){a(s).data("nivo:vars").stop=true;z("Stop Slider")}};this.start=function(){if(a(s).data("nivo:vars").stop){a(s).data("nivo:vars").stop=false;z("Start Slider")}};f.afterLoad.call(this)};a.fn.nivoSlider=function(s){return this.each(function(){var v=a(this);if(!v.data("nivoslider")){var f=new A(this,s);v.data("nivoslider",f)}})};a.fn.nivoSlider.defaults={effect:"random",slices:15,animSpeed:500,pauseTime:3E3,startSlide:0,directionNav:true,directionNavHide:true,controlNav:true,controlNavThumbs:false,controlNavThumbsFromRel:false,controlNavThumbsSearch:".jpg",controlNavThumbsReplace:"_thumb.jpg",keyboardNav:true,pauseOnHover:true,manualAdvance:false,captionOpacity:0.8,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}};a.fn._reverse=[].reverse})(jQuery);



/* 
 * jQuery Accordion Slider
 * 
 * Writed by Architector
 * Based on Kwicks Accordion Slider
 * 
 * All Rights Reserved (c) 2011
 */
(function($){$.fn.kwicks=function(v){var w={isVertical:false,sticky:false,defaultKwick:0,event:'mouseover',spacing:0,duration:1000,descrAnim:500,descrOpacity:0.8};var o=$.extend(w,v);var x=(o.isVertical?'height':'width');var y=(o.isVertical?'top':'left');return this.each(function(){var k=$(this);var l=k.children('li');var m=k.find('li').find('.slide-description');var n=k.find('li').find('.slide-description-short');var p=l.length;var q=(k.css(x).replace(/px/,''))/p;k.addClass('sliderActive');if(o.isVertical){k.addClass('vertical')}else{k.addClass('horizontal')}k.find('li').prepend('<span class="overlay"></span>');var r=l.height();var s=l.width();var t=k.find('li').find('.overlay');if(!o.max){o.max=(q*l.size())-(o.min*(l.size()-1))}else{o.min=((q*l.size())-o.max)/(l.size()-1)}if(!o.isVertical){n.css({width:q-40,opacity:o.descrOpacity,paddingRight:(q*l.size())-o.min});m.css({width:o.max-40,opacity:0,paddingRight:(q*l.size())-o.max});t.css({height:r})}else{t.css({width:s});n.css({width:s-20,opacity:o.descrOpacity});m.css({width:s-40,opacity:0})}if(o.sticky){n.css({opacity:0});l.eq(o.defaultKwick).find('.slide-description').css({opacity:o.descrOpacity})}if(o.isVertical){k.css({width:l.eq(0).css('width'),height:(q*l.size())+(o.spacing*(l.size()-1))+'px'})}else{k.css({width:(q*l.size())+(o.spacing*(l.size()-1))+'px',height:l.eq(0).css('height')})}var u=[];for(i=0;i<l.size();i++){u[i]=[];for(j=1;j<l.size()-1;j++){if(i==j){u[i][j]=o.isVertical?j*o.min+(j*o.spacing):j*o.min+(j*o.spacing)}else{u[i][j]=(j<=i?(j*o.min):(j-1)*o.min+o.max)+(j*o.spacing)}}}l.each(function(i){var h=$(this);if(i===0){h.css(y,'0px')}else if(i==l.size()-1){h.css(o.isVertical?'bottom':'right','0px')}else{if(o.sticky){h.css(y,u[o.defaultKwick][i])}else{h.css(y,(i*q)+(i*o.spacing))}}if(x=='width'){h.css({margin:0,position:'absolute',width:q})}else{h.css({margin:0,position:'absolute',height:q})}if(o.sticky){if(o.defaultKwick==i){h.css(x,o.max+'px');h.addClass('active')}else{h.css(x,o.min+'px')}}h.bind(o.event,function(){var c=[];var d=[];l.stop().removeClass('active');for(j=0;j<l.size();j++){c[j]=l.eq(j).css(x).replace(/px/,'');d[j]=l.eq(j).css(y).replace(/px/,'')}var e={};e[x]=o.max;var f=o.max-c[i];var g=c[i]/f;h.addClass('active').animate(e,{step:function(a){var b=f!=0?a/f-g:1;l.each(function(j){if(j!=i){l.eq(j).css(x,c[j]-((c[j]-o.min)*b)+'px')}if(j>0&&j<l.size()-1){l.eq(j).css(y,d[j]-((d[j]-u[i][j])*b)+'px')}})},duration:o.duration,easing:o.easing});n.stop().animate({opacity:0},o.descrAnim/2);m.stop().animate({opacity:o.descrOpacity},o.descrAnim/2);l.not('.active').find('.slide-description').stop().animate({opacity:0},o.descrAnim)})});if(!o.sticky){k.bind("mouseleave",function(){var c=[];var d=[];l.removeClass('active').stop();for(i=0;i<l.size();i++){c[i]=l.eq(i).css(x).replace(/px/,'');d[i]=l.eq(i).css(y).replace(/px/,'')}var e={};e[x]=q;var f=q-c[0];l.eq(0).animate(e,{step:function(a){var b=f!=0?(a-c[0])/f:1;for(i=1;i<l.size();i++){l.eq(i).css(x,c[i]-((c[i]-q)*b)+'px');if(i<l.size()-1){l.eq(i).css(y,d[i]-((d[i]-((i*q)+(i*o.spacing)))*b)+'px')}}},duration:o.duration,easing:o.easing});m.stop().animate({opacity:0},o.descrAnim/2);n.stop().animate({opacity:o.descrOpacity},o.descrAnim)})}})}})(jQuery);



/*
 * jQuery Tools 1.2.5 Tooltip - UI essentials
 * NO COPYRIGHTS OR LICENSES. DO WHAT YOU LIKE.
 * Since: November 2008
 */
(function($){$.tools=$.tools||{version:'1.2.5'};$.tools.tooltip={conf:{effect:'toggle',fadeOutSpeed:"fast",predelay:0,delay:30,opacity:1,tip:0,position:['top','center'],offset:[0,0],relative:false,cancelDefault:true,events:{def:"mouseenter,mouseleave",input:"focus,blur",widget:"focus mouseenter,blur mouseleave",tooltip:"mouseenter,mouseleave"},layout:'<div/>',tipClass:'tooltip'},addEffect:function(a,b,c){g[a]=[b,c]}};var g={toggle:[function(a){var b=this.getConf(),tip=this.getTip(),o=b.opacity;if(o<1){tip.css({opacity:o})}tip.show();a.call()},function(a){this.getTip().hide();a.call()}],fade:[function(a){var b=this.getConf();this.getTip().fadeTo(b.fadeInSpeed,b.opacity,a)},function(a){this.getTip().fadeOut(this.getConf().fadeOutSpeed,a)}]};function getPosition(a,b,c){var d=c.relative?a.position().top:a.offset().top,left=c.relative?a.position().left:a.offset().left,pos=c.position[0];d-=b.outerHeight()-c.offset[0];left+=a.outerWidth()+c.offset[1];if(/iPad/i.test(navigator.userAgent)){d-=$(window).scrollTop()}var e=b.outerHeight()+a.outerHeight();if(pos=='center'){d+=e/2}if(pos=='bottom'){d+=e}pos=c.position[1];var f=b.outerWidth()+a.outerWidth();if(pos=='center'){left-=f/2}if(pos=='left'){left-=f}return{top:d,left:left}}function Tooltip(c,d){var f=this,fire=c.add(f),tip,timer=0,pretimer=0,title=c.attr("title"),tipAttr=c.attr("data-tooltip"),effect=g[d.effect],shown,isInput=c.is(":input"),isWidget=isInput&&c.is(":checkbox, :radio, select, :button, :submit"),type=c.attr("type"),evt=d.events[type]||d.events[isInput?(isWidget?'widget':'input'):'def'];if(!effect){throw"Nonexistent effect \""+d.effect+"\"";}evt=evt.split(/,\s*/);if(evt.length!=2){throw"Tooltip: bad events configuration for "+type;}c.bind(evt[0],function(e){clearTimeout(timer);if(d.predelay){pretimer=setTimeout(function(){f.show(e)},d.predelay)}else{f.show(e)}}).bind(evt[1],function(e){clearTimeout(pretimer);if(d.delay){timer=setTimeout(function(){f.hide(e)},d.delay)}else{f.hide(e)}});if(title&&d.cancelDefault){c.removeAttr("title");c.data("title",title)}$.extend(f,{show:function(e){if(!tip){if(tipAttr){tip=$(tipAttr)}else if(d.tip){tip=$(d.tip).eq(0)}else if(title){tip=$(d.layout).addClass(d.tipClass).appendTo(document.body).hide().append(title)}else{tip=c.next();if(!tip.length){tip=c.parent().next()}}if(!tip.length){throw"Cannot find tooltip for "+c;}}if(f.isShown()){return f}tip.stop(true,true);var a=getPosition(c,tip,d);if(d.tip){tip.html(c.data("title"))}e=e||$.Event();e.type="onBeforeShow";fire.trigger(e,[a]);if($.browser.mozilla){}else{if(e.isDefaultPrevented()){return f}}a=getPosition(c,tip,d);tip.css({position:'absolute',top:a.top,left:a.left});shown=true;effect[0].call(f,function(){e.type="onShow";shown='full';fire.trigger(e)});var b=d.events.tooltip.split(/,\s*/);if(!tip.data("__set")){tip.bind(b[0],function(){clearTimeout(timer);clearTimeout(pretimer)});if(b[1]&&!c.is("input:not(:checkbox, :radio), textarea")){tip.bind(b[1],function(e){if(e.relatedTarget!=c[0]){c.trigger(evt[1].split(" ")[0])}})}tip.data("__set",true)}return f},hide:function(e){if(!tip||!f.isShown()){return f}e=e||$.Event();e.type="onBeforeHide";fire.trigger(e);if($.browser.mozilla){}else{if(e.isDefaultPrevented()){return}}shown=false;g[d.effect][1].call(f,function(){e.type="onHide";fire.trigger(e)});return f},isShown:function(a){return a?shown=='full':shown},getConf:function(){return d},getTip:function(){return tip},getTrigger:function(){return c}});$.each("onHide,onBeforeShow,onShow,onBeforeHide".split(","),function(i,b){if($.isFunction(d[b])){$(f).bind(b,d[b])}f[b]=function(a){if(a){$(f).bind(b,a)}return f}})}$.fn.tooltip=function(a){var b=this.data("tooltip");if(b){return b}a=$.extend(true,{},$.tools.tooltip.conf,a);if(typeof a.position=='string'){a.position=a.position.split(/,?\s/)}this.each(function(){b=new Tooltip($(this),a);$(this).data("tooltip",b)});return a.api?b:this}})(jQuery);

(function(d){var i=d.tools.tooltip;d.extend(i.conf,{direction:"up",bounce:false,slideOffset:10,slideInSpeed:200,slideOutSpeed:200,slideFade:!d.browser.msie});var e={up:["-","top"],down:["+","top"],left:["-","left"],right:["+","left"]};i.addEffect("slide",function(g){var a=this.getConf(),f=this.getTip(),b=a.slideFade?{opacity:a.opacity}:{},c=e[a.direction]||e.up;b[c[1]]=c[0]+"="+a.slideOffset;a.slideFade&&f.css({opacity:0});f.show().animate(b,a.slideInSpeed,g)},function(g){var a=this.getConf(),f=a.slideOffset,b=a.slideFade?{opacity:0}:{},c=e[a.direction]||e.up,h=""+c[0];if(a.bounce)h=h=="+"?"-":"+";b[c[1]]=h+"="+f;this.getTip().animate(b,a.slideOutSpeed,function(){d(this).hide();g.call()})})})(jQuery);

(function(g){function j(a){var c=g(window),d=c.width()+c.scrollLeft(),h=c.height()+c.scrollTop();return[a.offset().top<=c.scrollTop(),d<=a.offset().left+a.width(),h<=a.offset().top+a.height(),c.scrollLeft()>=a.offset().left]}function k(a){for(var c=a.length;c--;)if(a[c])return false;return true}var i=g.tools.tooltip;i.dynamic={conf:{classNames:"top right bottom left"}};g.fn.dynamic=function(a){if(typeof a=="number")a={speed:a};a=g.extend({},i.dynamic.conf,a);var c=a.classNames.split(/\s/),d;this.each(function(){var h=g(this).tooltip().onBeforeShow(function(e,f){e=this.getTip();var b=this.getConf();d||(d=[b.position[0],b.position[1],b.offset[0],b.offset[1],g.extend({},b)]);g.extend(b,d[4]);b.position=[d[0],d[1]];b.offset=[d[2],d[3]];e.css({visibility:"hidden",position:"absolute",top:f.top,left:f.left}).show();f=j(e);if(!k(f)){if(f[2]){g.extend(b,a.top);b.position[0]="top";e.addClass(c[0])}if(f[3]){g.extend(b,a.right);b.position[1]="right";e.addClass(c[1])}if(f[0]){g.extend(b,a.bottom);b.position[0]="bottom";e.addClass(c[2])}if(f[1]){g.extend(b,a.left);b.position[1]="left";e.addClass(c[3])}if(f[0]||f[2])b.offset[0]*=-1;if(f[1]||f[3])b.offset[1]*=-1}e.css({visibility:"visible"}).hide()});h.onBeforeShow(function(){var e=this.getConf();this.getTip();setTimeout(function(){e.position=[d[0],d[1]];e.offset=[d[2],d[3]]},0)});h.onHide(function(){var e=this.getTip();e.removeClass(a.classNames)});ret=h});return a.api?ret:this}})(jQuery);

jQuery(document).ready(function(){
	jQuery('.link_tooltip').tooltip({
		effect:'slide',
		direction:'up',
		slideOffset:15,
		slideInSpeed:300,
		slideOutSpeed:300,
		position:'bottom center'
	});
});



/* Social Icons Scripts */
(function($){$.fn.socicons=function(c){var d={icons:'digg,stumbleupon,delicious,facebook,yahoo',imagesurl:'images/',imageformat:'png',light:true,targetblank:true,shorturl:''};var e=$.extend({},d,c);var f=this;var g=e.targetblank?'target="_blank"':'';var h=e.icons.split(',');for(key in h){var j=h[key];var k=socformat[h[key]];if(k!=undefined){k=k.replace('{TITLE}',urlencode(socicons_title()));k=k.replace('{URL}',urlencode(socicons_url()));k=k.replace('{SHORTURL}',urlencode(socicons_shorturl()));k=k.replace('{KEYWORDS}',urlencode(socicons_metawords()));k=k.replace('{DESCRIPTION}',urlencode(socicons_metadescript()));var l='<a '+g+' href="'+k+'" class="socicons_icon" title="'+j+'"><img src="'+e.imagesurl+j+'.'+e.imageformat+'" alt="'+j+'" /></a>';this.append(l)}}if(e.light){this.find('.socicons_icon').bind('mouseover',function(){$(this).siblings().stop().animate({'opacity':0.3},500)});this.find('.socicons_icon').bind('mouseout',function(){$(this).siblings().stop().animate({'opacity':1},500)})}var m;function socicons_metawords(){if(n==undefined){metaCollection=document.getElementsByTagName('meta');for(i=0;i<metaCollection.length;i++){nameAttribute=metaCollection[i].name.search(/keywords/);if(nameAttribute!=-1){m=metaCollection[i].content;return m}}}else{return m}}var n;function socicons_metadescript(){if(n==undefined){metaCollection=document.getElementsByTagName('meta');for(i=0;i<metaCollection.length;i++){nameAttribute=metaCollection[i].name.search(/description/);if(nameAttribute!=-1){n=metaCollection[i].content;return n}}}else{return n}}function socicons_title(){return document.title}function socicons_url(){var a=document.location.href;return a}function socicons_shorturl(){if(e.shorturl==''){return socicons_url()}else{return e.shorturl}}function urlencode(a){if(a==undefined){return''}return a.replace(/\s/g,'%20').replace('+','%2B').replace('/%20/g','+').replace('*','%2A').replace('/','%2F').replace('@','%40')}function light(a,b){if(b){a.style.opacity=1;a.childNodes[0].style.filter='progid:DXImageTransform.Microsoft.Alpha(opacity=100);'}else{a.style.opacity=light_opacity/100;a.style.filter='alpha(opacity=20)';a.childNodes[0].style.filter='progid:DXImageTransform.Microsoft.Alpha(opacity='+light_opacity+');'}}return this}})(jQuery);

var socformat = Array();
socformat['nujij'] = 'http://nujij.nl/jij.lynkx?t={TITLE}&u={URL}&b={DESCRIPTION}'
socformat['ekudos'] = 'http://www.ekudos.nl/artikel/nieuw?url={URL}&title={TITLE}&desc={DESCRIPTION}';
socformat['digg'] = 'http://digg.com/submit?phase=2&url={URL}&title={TITLE}';
socformat['linkedin'] = 'http://www.linkedin.com/shareArticle?mini=true&url={URL}&title={TITLE}&summary={DESCRIPTION}&source=';
socformat['sphere'] = 'http://www.sphere.com/search?q=sphereit:{URL}';
socformat['technorati'] = 'http://www.technorati.com/faves?add={URL}';
socformat['delicious'] = 'http://del.icio.us/post?url={URL}&title={TITLE}';
socformat['furl'] = 'http://furl.net/storeIt.jsp?u={URL}&t={TITLE}';
socformat['netscape'] = 'http://www.netscape.com/submit/?U={URL}&T={TITLE}';
socformat['yahoo'] = 'http://myweb2.search.yahoo.com/myresults/bookmarklet?u={URL}&t={TITLE}';
socformat['google'] = 'http://www.google.com/bookmarks/mark?op=edit&bkmk={URL}&title={TITLE}';
socformat['newsvine'] = 'http://www.newsvine.com/_wine/save?u={URL}&h={TITLE}';
socformat['reddit'] = 'http://reddit.com/submit?url={URL}&title={TITLE}';
socformat['blogmarks'] = 'http://blogmarks.net/my/new.php?mini=1&url={URL}&title={TITLE}';
socformat['magnolia'] = 'http://ma.gnolia.com/bookmarklet/add?url={URL}&title={TITLE}';
socformat['live'] = 'https://favorites.live.com/quickadd.aspx?marklet=1&mkt=en-us&url={URL}&title={TITLE}&top=1';
socformat['tailrank'] = 'http://tailrank.com/share/?link_href={URL}&title={TITLE}';
socformat['facebook'] = 'http://www.facebook.com/share.php?u={URL}';
socformat['twitter'] = 'http://twitter.com/?status={TITLE}%20-%20{SHORTURL}';
socformat['stumbleupon'] = 'http://www.stumbleupon.com/submit?url={URL}&title={TITLE}';
socformat['bligg'] = 'http://www.bligg.nl/submit.php?url={URL}';
socformat['symbaloo'] = 'http://www.symbaloo.com/en/add/url={URL}&title={TITLE}';
socformat['misterwong'] = 'http://www.mister-wong.com/add_url/?bm_url={URL}&bm_title={TITLE}&bm_comment=&bm_tags={KEYWORDS}';
socformat['buzz']	= 'http://www.google.com/reader/link?url={URL}&title={TITLE}&snippet={DESCRIPTION}&srcURL={URL}&srcTitle={TITLE}';
socformat['myspace'] = 'http://www.myspace.com/Modules/PostTo/Pages/?u={URL}';
socformat['mail']	= 'mailto:to@email.com?SUBJECT={TITLE}&BODY={DESCRIPTION}-{URL}';

jQuery(document).ready(function() { 
	jQuery('.social').socicons({
		icons:'nujij,linkedin,ekudos,digg,sphere,technorati,delicious,furl,netscape,yahoo,google,newsvine,reddit,blogmarks,magnolia,live,tailrank,facebook,twitter,stumbleupon,bligg,symbaloo,misterwong,mail',
		imagesurl:'images/socicons/'
	});
});

jQuery(document).ready(function(){
	jQuery('a.share').toggle(function(){
		jQuery(this).parent().find('.social').show('slow');
		return false;
	}, function(){
		jQuery(this).parent().find('.social').hide('slow');
		return false;
	});
});



/*
 * jQuery gMap
 *
 * @url		http://gmap.nurtext.de/
 * @author	Cedric Kastner <cedric@nur-text.de>
 * @version	1.1.0
 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(q($){$.G.H=q(d){6(!19.N||!N()){I J}K e=$.1a({},$.G.H.O,d);I J.1b(q(){$8=5 1c(J);$D=5 1d();6(e.p){$D.L(e.p,q(a){$8.v(a,e.r)})}s{6(e.t&&e.u){$8.v(5 M(e.t,e.u),e.r)}s{6($.h(e.k)&&e.k.w>0){6(e.k[0].p){$D.L(e.k[0].p,q(a){$8.v(a,e.r)})}s{$8.v(5 M(e.k[0].t,e.k[0].u),e.r)}}s{$8.v(5 M(E.1e,9.1f),e.r)}}}$8.1g(e.P);6(e.x.w==0){$8.1h()}s{Q(K i=0;i<e.x.w;i++){1i("$8.1j(5 "+e.x[i]+"());")}}6(e.R==S&&e.x.w!=0){$8.1k()}Q(K j=0;j<e.k.w;j++){3=e.k[j];7=5 1l();7.y=e.4.y;7.z=e.4.z;7.T=($.h(e.4.l))?5 F(e.4.l[0],e.4.l[1]):e.4.l;7.U=($.h(e.4.m))?5 F(e.4.m[0],e.4.m[1]):e.4.m;7.V=($.h(e.4.n))?5 A(e.4.n[0],e.4.n[1]):e.4.n;7.W=($.h(e.4.o))?5 A(e.4.o[0],e.4.o[1]):e.4.o;6(3.4){7.y=3.4.y;7.z=3.4.z;7.T=($.h(3.4.l))?5 F(3.4.l[0],3.4.l[1]):3.4.l;7.U=($.h(3.4.m))?5 F(3.4.m[0],3.4.m[1]):3.4.m;7.V=($.h(3.4.n))?5 A(3.4.n[0],3.4.n[1]):3.4.n;7.W=($.h(3.4.o))?5 A(3.4.o[0],3.4.o[1]):3.4.o}6(3.p){6(3.f=="1m"){3.f=3.p}$D.L(3.p,q(b,c){I q(a){g=5 X(a,b);6(c.f){g.Y(e.B+c.f+e.C)}6(c.f&&c.Z){g.10(e.B+c.f+e.C)}6(g){$8.11(g)}}}(7,3))}s{6(3.f=="1n"){3.f=3.t+", "+3.u}g=5 X(5 A(3.u,3.t),7);6(3.f){g.Y(e.B+3.f+e.C)}6(3.f&&3.Z){g.10(e.B+3.f+e.C)}6(g){$8.11(g)}}}})};$.G.H.O={p:"",t:0,u:0,r:1,k:[],x:[],R:S,P:1o,B:\'<12 1p="1q">\',C:"</12>",4:{y:"13://14.15.16/17/3.18",z:"13://14.15.16/17/1r.18",l:[1s,E],m:[1t,E],n:[9,E],o:[9,2]}}})(1u);',62,93,'|||marker|icon|new|if|gicon|gmap|||||||html|gmarker|isArray|||markers|iconsize|shadowsize|iconanchor|infowindowanchor|address|function|zoom|else|latitude|longitude|setCenter|length|controls|image|shadow|GPoint|html_prepend|html_append|geocoder|34|GSize|fn|gMap|return|this|var|getLatLng|GLatLng|GBrowserIsCompatible|defaults|maptype|for|scrollwheel|true|iconSize|shadowSize|iconAnchor|infoWindowAnchor|GMarker|bindInfoWindowHtml|popup|openInfoWindowHtml|addOverlay|div|http|www|google|com|mapfiles|png|window|extend|each|GMap2|GClientGeocoder|885931|84375|setMapType|setUIToDefault|eval|addControl|enableScrollWheelZoom|GIcon|_address|_latlng|G_NORMAL_MAP|class|gmap_marker|shadow50|20|37|jQuery'.split('|'),0,{}))



/*
 * Copyright (c) 2009 - 2010 Happyworm Ltd
 * 
 * Dual licensed under the MIT and GPL licenses.
 *  http://www.opensource.org/licenses/mit-license.php
 *  http://www.gnu.org/copyleft/gpl.html
 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(o(c,h){c.5e.7=o(a){G b=1H a==="2m",d=5f.1I.3Y.5g(3h,1),f=6;a=!b&&d.I?c.Y.3Z(5h,[B,a].5i(d)):a;q(b&&a.5j(0)==="5k")M f;b?6.O(o(){G e=c.2n(6,"7"),g=e&&c.5l(e[a])?e[a].3Z(e,d):e;q(g!==e&&g!==h){f=g;M r}}):6.O(o(){G e=c.2n(6,"7");q(e){e.1J(a||{}).3i();e.1J(a||{})}J c.2n(6,"7",3j c.7(a,6))});M f};c.7=o(a,b){q(3h.I){6.T=c(b);6.E=c.Y(B,{},6.E,a);G d=6;6.T.3k("5m.7",o(){d.41()});6.3i()}};c.7.K={1U:"5n",3l:"5o",1j:"5p",1K:"5q",42:"5r",2H:"5s",3m:"5t",43:"5u",44:"5v",45:"5w",13:"5x",V:"5y",46:"5z",47:"5A",3n:"5B",3o:"5C",3p:"5D",48:"5E",1Z:"5F",2I:"5G",2o:"5H",2J:"5I",49:"5J",3q:"5K",2K:"5L"};c.7.4a=["42","43","44","45","46","47","48","49"];c.7.V=o(){c.O(c.7.1I.2p,o(a,b){b.2n("7").p.1k&&b.7("V")})};c.7.1w={4b:r,4c:B,4d:B,4e:r,4f:B,4g:B,4h:":",4i:":",4j:""};c.7.3r=o(a){a=3j 5M(a*5N);G b=a.5O(),d=a.5P();a=a.5Q();b=c.7.1w.4e&&b<10?"0"+b:b;d=c.7.1w.4f&&d<10?"0"+d:d;a=c.7.1w.4g&&a<10?"0"+a:a;M(c.7.1w.4b?b+c.7.1w.4h:"")+(c.7.1w.4c?d+c.7.1w.4i:"")+(c.7.1w.4d?a+c.7.1w.4j:"")};c.7.4k=o(a){a=a.3s();G b=/(5R)(?:.*W)?[ \\/]([\\w.]+)/,d=/(2L) ([\\w.]+)/,f=/(5S)(?:.*? 5T:([\\w.]+))?/;a=/(4l)[ \\/]([\\w.]+)/.2M(a)||b.2M(a)||d.2M(a)||a.4m("5U")<0&&f.2M(a)||[];M{17:a[1]||"",W:a[2]||"0"}};c.7.17={};G m=c.7.4k(2q.5V);q(m.17){c.7.17[m.17]=B;c.7.17.W=m.W}c.7.1I={1L:0,W:{3t:"2.0.0",3u:"2.0.0",v:"5W"},E:{2r:"5X",1V:"y, v",1M:"2N",20:"5Y",14:0.8,18:r,2O:"",2P:"#5Z",1C:{15:".19-A-13",13:".19-13",V:".19-V",2Q:".19-2Q",1r:".19-60-2R",2S:".19-13-2R",21:".19-21",22:".19-22",23:".19-14-2R",2T:".19-14-2R-24",Z:".19-4n-61",X:".19-X"},25:"19",3v:r,62:r},2p:{},p:{1l:"",C:{},4o:B,1a:{},2s:"",1x:B,R:B,1k:r,A:r,2t:0,2u:0,2U:0,Z:0,X:0},4p:{14:h,18:r,Q:0,U:0},z:{1U:r,2V:h,1N:h},1V:{y:B,v:B},1a:{2N:{1D:\'F/63; 1O="2N"\',1E:B,C:"F"},4q:{1D:\'F/4r; 1O="4s.40.2"\',1E:B,C:"F"},64:{1D:\'F/4t; 1O="2W"\',1E:r,C:"F"},4u:{1D:\'F/4u; 1O="1"\',1E:r,C:"F"},65:{1D:\'F/4v; 1O="2W"\',1E:r,C:"F"},4w:{1D:\'A/4r; 1O="66.67, 4s.40.2"\',1E:B,C:"A"},68:{1D:\'A/4t; 1O="69, 2W"\',1E:r,C:"A"},6a:{1D:\'A/4v; 1O="2W, 6b"\',1E:r,C:"A"}},3i:o(){G a=6;6.T.3w();6.p=c.Y({},6.p,6.4p);6.z=c.Y({},6.z);6.1c=[];6.1W=[];6.1F={};6.D={};6.y={};6.y.F={};6.y.A={};6.v={};6.u={};6.u.2X={};6.u.t={};6.p.14=6.2Y(6.E.14,0,1);6.p.18=6.E.18;6.p.Q=6.T.u("Q");6.p.U=6.T.u("U");6.T.u({"6c-6d":6.E.2O});c.O(6.E.1M.3s().3x(","),o(e,g){G i=g.3y(/^\\s+|\\s+$/g,"");q(a.1a[i]){G j=r;c.O(a.1c,o(n,k){q(i===k){j=B;M r}});j||a.1c.4x(i)}});c.O(6.E.1V.3s().3x(","),o(e,g){G i=g.3y(/^\\s+|\\s+$/g,"");q(a.1V[i]){G j=r;c.O(a.1W,o(n,k){q(i===k){j=B;M r}});j||a.1W.4x(i)}});6.z.2V="6e"+6.1L;6.2p[6.z.2V]=6.T;6.T.3z("N")===""&&6.T.3z("N",6.E.25+"6f"+6.1L);6.z.2Z=c.Y({},{N:6.T.3z("N"),t:6.T});6.z.F=c.Y({},{N:6.E.25+"6g"+6.1L,t:h});6.z.A=c.Y({},{N:6.E.25+"6h"+6.1L,t:h});6.z.v=c.Y({},{N:6.E.25+"6i"+6.1L,t:h,1X:6.E.2r+(6.E.2r!==""&&6.E.2r.3Y(-1)!=="/"?"/":"")+"3A.1X"});6.z.S=c.Y({},{N:6.E.25+"6j"+6.1L,t:h});c.O(c.7.K,o(e,g){q(a.E[e]!==h){a.T.3k(g+".7",a.E[e]);a.E[e]=h}});6.D.S=1P.2v("6k");6.D.S.N=6.z.S.N;6.D.S.6l=o(){q(!a.p.A||a.p.1x)a.z.S.t.1s()};6.T.2w(6.D.S);6.z.S.t=c("#"+6.z.S.N);6.z.S.t.u({Q:6.p.Q,U:6.p.U});6.z.S.t.1d();6.1F.F=r;6.1F.A=r;c.O(6.1c,o(e,g){a.1F[a.1a[g].C]=B});6.y.F.1m=r;q(6.1F.F){6.D.F=1P.2v("F");6.D.F.N=6.z.F.N;6.y.F.1m=!!6.D.F.3B}6.y.A.1m=r;q(6.1F.A){6.D.A=1P.2v("A");6.D.A.N=6.z.A.N;6.y.A.1m=!!6.D.A.3B}6.v.1m=6.4y(10);6.y.1Y={};6.v.1Y={};c.O(6.1c,o(e,g){a.y.1Y[g]=a.y[a.1a[g].C].1m&&""!==a.D[a.1a[g].C].3B(a.1a[g].1D);a.v.1Y[g]=a.1a[g].1E&&a.v.1m});6.y.26=r;6.v.26=r;c.O(6.1W,o(e,g){q(e===0)a[g].26=B;J{G i=r,j=r;c.O(a.1c,o(n,k){q(a[a.1W[0]].1Y[k])q(a.1a[k].C==="A")j=B;J i=B});a[g].26=a.1F.F&&!i||a.1F.A&&!j}});6.y.1t={};6.v.1t={};c.O(6.1c,o(e,g){a.y.1t[g]=a.y.1Y[g]&&a.y.26;a.v.1t[g]=a.v.1Y[g]&&a.v.26});6.y.11=r;6.v.11=r;c.O(6.1W,o(e,g){c.O(a.1c,o(i,j){q(a[g].1t[j]){a[g].11=B;M r}})});6.y.11||6.v.11||6.1Q({1n:c.7.1j.27,1o:"{1V:\'"+6.E.1V+"\', 1M:\'"+6.E.1M+"\'}",16:c.7.1R.27,1b:c.7.1S.27});6.y.P=r;6.y.F.H=r;6.y.A.H=r;6.v.P=r;6.v.H=r;q(6.v.11){G b="N="+6m(6.z.2Z.N)+"&6n="+6.p.14+"&18="+6.p.18;q(c.17.2L&&3C(c.17.W)<=8){G d=\'<30 N="\'+6.z.v.N+\'"\';d+=\' 6o="6p:6q-6r-6s-6t-6u"\';d+=\' 6v="\'+1P.1e.6w(0,1P.1e.4m(":"))+\'://6x.4z.4A/6y/3D/6z/v/6A.6B"\';d+=\' 1n="4B/x-3D-v"\';d+=\' Q="0" U="0">\';d+="</30>";G f=[];f[0]=\'<2x 1T="6C" 24="\'+6.z.v.1X+\'" />\';f[1]=\'<2x 1T="4C" 24="4D" />\';f[2]=\'<2x 1T="4E" 24="\'+b+\'" />\';f[3]=\'<2x 1T="4F" 24="4G" />\';f[4]=\'<2x 1T="4H" 24="\'+6.E.2O+\'" />\';b=1P.2v(d);31(d=0;d<f.I;d++)b.6D(1P.2v(f[d]));6.T.2w(b)}J{f=\'<6E 1T="\'+6.z.v.N+\'" N="\'+6.z.v.N+\'" 1l="\'+6.z.v.1X+\'"\';f+=\' Q="0" U="0" 4H="\'+6.E.2O+\'"\';f+=\' 4C="4D" 4E="\'+b+\'"\';f+=\' 4F="4G"\';f+=\' 1n="4B/x-3D-v" 6F="6G://6H.4z.4A/6I/6J" />\';6.T.2w(f)}6.z.v.t=c("#"+6.z.v.N);6.z.v.t.u({Q:"12",U:"12"})}q(6.y.11){q(6.y.F.1m){6.3E(6.D.F,6.y.F);6.T.2w(6.D.F);6.z.F.t=c("#"+6.z.F.N)}q(6.y.A.1m){6.3E(6.D.A,6.y.A);6.T.2w(6.D.A);6.z.A.t=c("#"+6.z.A.N);6.z.A.t.u({Q:"12",U:"12"})}}6.y.11&&!6.v.11&&4I.32(o(){a.z.1U=B;a.W.v="n/a";a.L(c.7.K.1U)},1f);c.O(6.E.1C,o(e,g){a.2y(e,g)});6.1u();6.1p(r);6.2z(6.p.14);6.33(6.p.18);6.u.t.15.I&&6.u.t.15.1d();c.7.1I.1L++},41:o(){6.2A();6.1u();6.1G();6.u.t.Z.I&&6.u.t.Z.34("");6.u.t.X.I&&6.u.t.X.34("");6.p.1k&&6.V();c.O(6.u.t,o(a,b){b.3F(".7")});6.T.6K("7");6.T.3F(".7");6.T.3w();6.2p[6.z.2V]=h},6L:o(){},6M:o(){},3E:o(a,b){G d=6;a.20=6.E.20;a.18=6.E.18;a.1g("2H",o(){q(b.H&&!d.p.R){d.2B(a);d.1u();d.L(c.7.K.2H)}},r);a.1g("2o",o(){q(b.H&&!d.p.R){d.2B(a);d.1u();d.L(c.7.K.2o)}},r);a.1g("3q",o(){q(b.H&&!d.p.R){d.p.X=6.X;d.2B(a);d.1u();d.L(c.7.K.3q)}},r);a.1g("13",o(){q(b.H&&!d.p.R){d.1p(B);d.L(c.7.K.13)}},r);a.1g("3o",o(){q(b.H&&!d.p.R){d.1p(B);d.1G();d.L(c.7.K.3o)}},r);a.1g("V",o(){q(b.H&&!d.p.R){d.1p(r);d.L(c.7.K.V)}},r);a.1g("3n",o(){q(b.H&&!d.p.R){d.35();d.L(c.7.K.3n)}},r);a.1g("3p",o(){q(b.H&&!d.p.R){a.14=d.4J(d.p.14);d.L(c.7.K.3p)}},r);a.1g("1Z",o(){q(b.H&&!d.p.R){d.35();d.L(c.7.K.1Z)}},r);a.1g("2I",o(){q(b.H&&!d.p.R){d.1G();d.L(c.7.K.2I)}},r);a.1g("3m",o(){q(b.H&&!d.p.R){d.1G();d.L(c.7.K.3m)}},r);a.1g("2J",o(){q(b.H&&!d.p.R){q(!c.7.17.4l)d.D.C.Z=0;d.D.C.V();d.1p(r);d.2B(a,B);d.1u();d.L(c.7.K.2J)}},r);a.1g("1j",o(){q(b.H&&!d.p.R){d.1p(r);d.1G();q(d.p.1k){d.p.R=B;d.p.1x=B;d.p.A&&d.z.A.t.u({Q:"12",U:"12"});d.2C(d.p.C.S)&&d.z.S.t.1s();d.u.t.15.I&&d.u.t.15.1s();d.1Q({1n:c.7.1j.1e,1o:d.p.1l,16:c.7.1R.1e,1b:c.7.1S.1e})}}},r);c.O(c.7.4a,o(f,e){a.1g(6,o(){b.H&&!d.p.R&&d.L(c.7.K[e])},r)})},2B:o(a,b){G d=0,f=0,e=0,g=0;d=a.Z;f=6.p.X>0?1f*d/6.p.X:0;q(1H a.1y==="30"&&a.1y.I>0){e=6.p.X>0?1f*a.1y.3G(a.1y.I-1)/6.p.X:1f;g=1f*a.Z/a.1y.3G(a.1y.I-1)}J{e=1f;g=f}q(b)f=g=d=0;6.p.2t=e;6.p.2u=g;6.p.2U=f;6.p.Z=d},2A:o(){6.p=c.Y({},6.p,c.7.1I.p)},L:o(a,b,d){a=c.6N(a);a.7={};a.7.W=c.Y({},6.W);a.7.p=c.Y(B,{},6.p);a.7.y=c.Y(B,{},6.y);a.7.v=c.Y(B,{},6.v);q(b)a.7.1j=c.Y({},b);q(d)a.7.1K=c.Y({},d);6.T.6O(a)},6P:o(a,b){q(a===c.7.K.1U&&!6.z.1U){6.z.1U=B;6.W.v=b.W;6.W.3u!==6.W.v&&6.1Q({1n:c.7.1j.28,1o:6.W.v,16:c.7.1R.28+6.W.v,1b:c.7.1S.28});6.L(a)}q(6.v.H)36(a){1q c.7.K.2H:6.3H(b);6.1u();6.L(a);1z;1q c.7.K.2o:6.3H(b);6.1u();6.L(a);1z;1q c.7.K.13:6.1G();6.1p(B);6.L(a);1z;1q c.7.K.V:6.1p(r);6.L(a);1z;1q c.7.K.2J:6.1p(r);6.L(a);1z;1q c.7.K.1j:6.p.R=B;6.p.1x=B;6.p.A&&6.z.v.t.u({Q:"12",U:"12"});6.2C(6.p.C.S)&&6.z.S.t.1s();6.u.t.15.I&&6.u.t.15.1s();6.p.A?6.3I(6.p.C):6.3J(6.p.C);6.1Q({1n:c.7.1j.1e,1o:b.1l,16:c.7.1R.1e,1b:c.7.1S.1e});1z;1q c.7.K.1Z:6.35();6.L(a);1z;1q c.7.K.2I:6.1G();6.L(a);1z;6Q:6.L(a)}M r},3H:o(a){6.p.2t=a.2t;6.p.2u=a.2u;6.p.2U=a.2U;6.p.Z=a.Z;6.p.X=a.X},1p:o(a){6.p.4o=!a;q(6.u.t.13.I&&6.u.t.V.I)q(a){6.u.t.13.1d();6.u.t.V.1s()}J{6.u.t.13.1s();6.u.t.V.1d()}},1u:o(){6.u.t.1r.I&&6.u.t.1r.Q(6.p.2t+"%");6.u.t.2S.I&&6.u.t.2S.Q(6.p.2u+"%");6.u.t.Z.I&&6.u.t.Z.34(c.7.3r(6.p.Z));6.u.t.X.I&&6.u.t.X.34(c.7.3r(6.p.X))},35:o(){6.u.t.1r.I&&6.u.t.1r.6R("19-1Z-4K")},1G:o(){6.u.t.1r.I&&6.u.t.1r.6S("19-1Z-4K")},3K:o(a){G b=6;6.1G();37(6.z.1N);G d=6.y.F.H,f=6.y.A.H,e=r;c.O(6.1c,o(g,i){G j=b.1a[i].C==="A";c.O(b.1W,o(n,k){q(b[k].1t[i]&&b.2C(a[i])){G l=k==="y";q(j)q(l){b.y.F.H=r;b.y.A.H=B;b.v.H=r}J{b.y.F.H=r;b.y.A.H=r;b.v.H=B}J q(l){b.y.F.H=B;b.y.A.H=r;b.v.H=r}J{b.y.F.H=r;b.y.A.H=r;b.v.H=B}q(b.v.P||b.y.P&&b.v.H||d===b.y.F.H&&f===b.y.A.H)b.4L();J q(d!==b.y.F.H&&f!==b.y.A.H){b.38();b.p.A&&b.z.A.t.u({Q:"12",U:"12"});b.2A()}q(j){q(l){b.4M(a);b.y.P=B;b.v.P=r}J{b.3I(a);b.y.P=r;b.v.P=B}b.u.t.15.I&&b.u.t.15.1s();b.p.A=B}J{q(l){b.4N(a);b.y.P=B;b.v.P=r}J{b.3J(a);b.y.P=r;b.v.P=B}b.u.t.15.I&&b.u.t.15.1d();b.p.A=r}e=B;M r}});q(e)M r});q(e){q(6.2C(a.S))q(6.D.S.1l!==a.S)6.D.S.1l=a.S;J 6.z.S.t.1s();J 6.z.S.t.1d();6.p.1k=B;6.p.C=c.Y({},a);6.1p(r);6.1u()}J{6.p.1k&&!6.p.1x&&6.V();6.y.F.H=r;6.y.A.H=r;6.v.H=r;6.y.P=r;6.v.P=r;6.2A();6.1u();6.1p(r);6.z.S.t.1d();6.y.11&&6.1F.A&&6.z.A.t.u({Q:"12",U:"12"});6.v.11&&6.z.v.t.u({Q:"12",U:"12"});6.1Q({1n:c.7.1j.29,1o:"{1M:\'"+6.E.1M+"\'}",16:c.7.1R.29,1b:c.7.1S.29})}},4L:o(){6.2A();6.1p(r);6.z.S.t.1d();37(6.z.1N);q(6.y.P)6.4O();J 6.v.P&&6.4P()},39:o(){q(6.p.1k)q(6.y.P)6.2a();J 6.v.P&&6.3a();J 6.2b("39")},13:o(a){a=1H a==="3L"?a:4Q;q(6.p.1k)q(6.y.P)6.4R(a);J 6.v.P&&6.4S(a);J 6.2b("13")},15:o(){6.13()},V:o(a){a=1H a==="3L"?a:4Q;q(6.p.1k)q(6.y.P)6.38(a);J 6.v.P&&6.3M(a);J 6.2b("V")},6T:o(){G a=6;c.O(6.2p,o(b,d){a.T!==d&&d.2n("7").p.1k&&d.7("V")})},2Q:o(){q(6.p.1k)q(6.y.P)6.38(0);J 6.v.P&&6.3M(0);J 6.2b("2Q")},3b:o(a){a=6.2Y(a,0,1f);q(6.p.1k)q(6.y.P)6.4T(a);J 6.v.P&&6.4U(a);J 6.2b("3b")},21:o(){6.p.18=B;6.y.11&&6.3N(B);6.v.11&&6.3O(B);6.33(B);6.2z(0);6.L(c.7.K.2K)},22:o(){6.p.18=r;6.y.11&&6.3N(r);6.v.11&&6.3O(r);6.33(r);6.2z(6.p.14);6.L(c.7.K.2K)},33:o(a){q(6.u.t.21.I&&6.u.t.22.I)q(a){6.u.t.21.1d();6.u.t.22.1s()}J{6.u.t.21.1s();6.u.t.22.1d()}},14:o(a){a=6.2Y(a,0,1);6.p.14=a;6.y.11&&6.4V(a);6.v.11&&6.4W(a);6.p.18||6.2z(a);6.L(c.7.K.2K)},23:o(a){q(!6.p.18&&6.u.t.23){G b=6.u.t.23.4X();a=a.4Y-b.4Z;b=6.u.t.23.Q();6.14(a/b)}},2T:o(a){6.23(a)},2z:o(a){6.u.t.2T.I&&6.u.t.2T.Q(a*1f+"%")},4J:o(a){G b=0.6U*6V.6W();M a+(a<0.5?b:-b)},6X:o(a,b){6.E.2P=a;b&&c.O(6.E.1C,o(d,f){2Z.2y(d,f)})},2y:o(a,b){G d=6;q(1H b==="2m")q(c.7.1I.E.1C[a]){6.u.t[a]&&6.u.t[a].I&&6.u.t[a].3F(".7");6.E.1C[a]=b;6.u.2X[a]=6.E.2P+" "+b;6.u.t[a]=b?c(6.u.2X[a]):[];6.u.t[a].I&&6.u.t[a].3k("6Y.7",o(f){d[a](f);c(6).6Z();M r});b&&6.u.t[a].I!==1&&6.2D({1n:c.7.1K.2c,1o:6.u.2X[a],16:c.7.2E.2c+6.u.t[a].I+" 3c 31 "+a+" 3P.",1b:c.7.2F.2c})}J 6.2D({1n:c.7.1K.2d,1o:a,16:c.7.2E.2d,1b:c.7.2F.2d});J 6.2D({1n:c.7.1K.2e,1o:b,16:c.7.2E.2e,1b:c.7.2F.2e})},1r:o(a){q(6.u.t.1r){G b=6.u.t.1r.4X();a=a.4Y-b.4Z;b=6.u.t.1r.Q();6.3b(1f*a/b)}},2S:o(a){6.1r(a)},Z:o(){},X:o(){},1J:o(a,b){G d=a;q(3h.I===0)M c.Y(B,{},6.E);q(1H a==="2m"){G f=a.3x(".");q(b===h){31(G e=c.Y(B,{},6.E),g=0;g<f.I;g++)q(e[f[g]]!==h)e=e[f[g]];J{6.2D({1n:c.7.1K.2f,1o:a,16:c.7.2E.2f,1b:c.7.2F.2f});M h}M e}e=d={};31(g=0;g<f.I;g++)q(g<f.I-1){e[f[g]]={};e=e[f[g]]}J e[f[g]]=b}6.50(d);M 6},50:o(a){G b=6;c.O(a,o(d,f){b.51(d,f)});M 6},51:o(a,b){G d=6;36(a){1q"2P":6.E[a]=b;c.O(d.E.1C,o(f,e){d.2y(f,e)});1z;1q"1C":c.O(b,o(f,e){d.2y(f,e)})}M 6},3l:o(a){6.y.P&&6.52(a);6.v.P&&6.53(a);6.L(c.7.K.3l)},70:o(){},52:o(){},53:o(a){6.z.v.t.u({Q:a.Q,U:a.U})},3Q:o(){6.p.1k&&!6.p.1x&&6.D.C.V();6.E.20!=="71"&&6.2a();6.L(c.7.K.2o)},4N:o(a){G b=6;c.O(6.1c,o(d,f){q(b.y.1t[f]&&a[f]){b.p.1l=a[f];b.p.1a[f]=B;b.p.2s=f;M r}});6.D.C=6.D.F;6.3Q()},4M:o(a){G b=6;c.O(6.1c,o(d,f){q(b.y.1t[f]&&a[f]){b.p.1l=a[f];b.p.1a[f]=B;b.p.2s=f;M r}});6.D.C=6.D.A;6.3Q()},4O:o(){q(6.D.C){6.D.C.N===6.z.A.N&&6.z.A.t.u({Q:"12",U:"12"});6.D.C.V();6.D.C.1l="";c.17.2L&&3C(c.17.W)>=9||6.D.C.39()}},2a:o(){q(6.p.R){6.p.R=r;6.D.C.1l=6.p.1l;1h{6.D.C.39()}1i(a){}}37(6.z.1N)},4R:o(a){G b=6;6.2a();6.D.C.13();q(!3R(a))1h{6.D.C.Z=a}1i(d){6.z.1N=32(o(){b.13(a)},1f);M}6.3d()},38:o(a){G b=6;a>0?6.2a():37(6.z.1N);6.D.C.V();q(!3R(a))1h{6.D.C.Z=a}1i(d){6.z.1N=32(o(){b.V(a)},1f);M}a>0&&6.3d()},4T:o(a){G b=6;6.2a();1h{q(1H 6.D.C.1y==="30"&&6.D.C.1y.I>0)6.D.C.Z=a*6.D.C.1y.3G(6.D.C.1y.I-1)/1f;J q(6.D.C.X>0&&!3R(6.D.C.X))6.D.C.Z=a*6.D.C.X/1f;J 72"e";}1i(d){6.z.1N=32(o(){b.3b(a)},1f);M}6.p.R||6.3d()},3d:o(){q(6.p.1x){6.p.1x=r;6.u.t.15.I&&6.u.t.15.1d();q(6.p.A){6.z.S.t.1d();6.z.A.t.u({Q:6.p.Q,U:6.p.U})}}},4V:o(a){q(6.y.F.1m)6.D.F.14=a;q(6.y.A.1m)6.D.A.14=a},3N:o(a){q(6.y.F.1m)6.D.F.18=a;q(6.y.A.1m)6.D.A.18=a},3J:o(a){G b=6;1h{c.O(6.1c,o(f,e){q(b.v.1t[e]&&a[e]){36(e){1q"4q":b.1v().73(a[e]);1z;1q"2N":b.1v().74(a[e])}b.p.1l=a[e];b.p.1a[e]=B;b.p.2s=e;M r}});q(6.E.20==="54"){6.3a();6.p.R=r}}1i(d){6.1A(d)}},3I:o(a){G b=6;1h{c.O(6.1c,o(f,e){q(b.v.1t[e]&&a[e]){36(e){1q"4w":b.1v().75(a[e])}b.p.1l=a[e];b.p.1a[e]=B;b.p.2s=e;M r}});q(6.E.20==="54"){6.3a();6.p.R=r}}1i(d){6.1A(d)}},4P:o(){6.z.v.t.u({Q:"12",U:"12"});1h{6.1v().76()}1i(a){6.1A(a)}},3a:o(){1h{6.1v().77()}1i(a){6.1A(a)}6.p.R=r},4S:o(a){1h{6.1v().78(a)}1i(b){6.1A(b)}6.p.R=r;6.3e()},3M:o(a){1h{6.1v().79(a)}1i(b){6.1A(b)}q(a>0){6.p.R=r;6.3e()}},4U:o(a){1h{6.1v().7a(a)}1i(b){6.1A(b)}6.p.R||6.3e()},3e:o(){q(6.p.1x){6.p.1x=r;6.u.t.15.I&&6.u.t.15.1d();q(6.p.A){6.z.S.t.1d();6.z.v.t.u({Q:6.p.Q,U:6.p.U})}}},4W:o(a){1h{6.1v().7b(a)}1i(b){6.1A(b)}},3O:o(a){1h{6.1v().7c(a)}1i(b){6.1A(b)}},1v:o(){M 1P[6.z.v.N]},4y:o(a){G b=r,d;q(4I.55)1h{3j 55("56.56."+a);b=B}1i(f){}J q(2q.3S&&2q.7d.I>0)q(d=2q.3S["57 3f"])q(2q.3S["57 3f"].7e.3y(/.*\\s(\\d+\\.\\d+).*/,"$1")>=a)b=B;M c.17.2L&&3C(c.17.W)>=9?r:b},2C:o(a){M a&&1H a==="2m"},2Y:o(a,b,d){M a<b?b:a>d?d:a},2b:o(a){6.1Q({1n:c.7.1j.2g,1o:a,16:c.7.1R.2g,1b:c.7.1S.2g})},1A:o(a){6.1Q({1n:c.7.1j.2h,1o:6.z.v.1X,16:c.7.1R.2h+a.16,1b:c.7.1S.2h})},1Q:o(a){6.L(c.7.K.1j,a);q(6.E.3v)6.3T("7f!"+(a.16?"\\n\\n"+a.16:"")+(a.1b?"\\n\\n"+a.1b:"")+"\\n\\58: "+a.1o)},2D:o(a){6.L(c.7.K.1K,h,a);q(6.E.3v)6.3T("7g!"+(a.16?"\\n\\n"+a.16:"")+(a.1b?"\\n\\n"+a.1b:"")+"\\n\\58: "+a.1o)},3T:o(a){7h("7 "+6.W.3t+" : N=\'"+6.z.2Z.N+"\' : "+a)}};c.7.1j={2h:"7i",27:"7j",29:"7k",1e:"7l",2g:"7m",28:"7n"};c.7.1R={2h:"7\'s 3f 7o 1B 2i 7p 7q, 3U a 7r 7s 7t 7u 2G 7 7v K. 7w: ",27:"7x 1V 59 3V 3c 7y 7 2j 6 17. 7z 7A 7B 3f 59 3V 11.",29:"7C 1B 2i 7D 3W 13 7E C 1a 7F 2j 3K() 7G 6 17 7H 2k 4n E.",1e:"7I 1e 7J 2i 3V 7K.",2g:"7L 3W 7M C 7N 7O, 7P 7Q C 7R 1B 5a.",28:"7 "+c.7.1I.W.3t+" 7S 3A.1X W "+c.7.1I.W.3u+" 7T 3c "};c.7.1S={2h:"2l 2k 2r 1J 3X 7U 3A.1X 1B 7V.",27:"7W 2G 7 E: 1t 3X 1M.",29:"7X 3U F 1c 7Y 2j 2G 1M 1J 7Z 80.",1e:"2l C 1e 1B 5b.",2g:"81 3K() 3W 5a 2G C 1e.",28:"82 7 83."};c.7.1K={2c:"84",2d:"85",2e:"86",2f:"87"};c.7.2E={2c:"3g 3L 88 89 3c 8a 2i 8b 8c: ",2d:"3g 8d 5c 2j 7(\'1C\') 1B 2i a 5b 7 3P.",2e:"3g 8e 5c 2j 7(\'1C\') 1B 2i a 8f 3U 1B 3w.",2f:"3g 1J 8g 2j 7(\'1J\') 1B 8h."};c.7.2F={2c:"2l 2k u 5d 3X 2G 8i.",2d:"2l 2k 3P 1T.",2e:"2l 2k u 5d 1B a 2m.",2f:"2l 2k 1J 1T."}})(8j);',62,516,'||||||this|jPlayer|||||||||||||||||function|status|if|false||jq|css|flash|||html|internal|video|true|media|htmlElement|options|audio|var|gate|length|else|event|_trigger|return|id|each|active|width|waitForLoad|poster|element|height|pause|version|duration|extend|currentTime||used|0px|play|volume|videoPlay|message|browser|muted|jp|format|hint|formats|hide|URL|100|addEventListener|try|catch|error|srcSet|src|available|type|context|_updateButtons|case|seekBar|show|support|_updateInterface|_getMovie|timeFormat|waitForPlay|seekable|break|_flashError|is|cssSelector|codec|flashCanPlay|require|_seeked|typeof|prototype|option|warning|count|supplied|htmlDlyCmdId|codecs|document|_error|errorMsg|errorHint|name|ready|solution|solutions|swf|canPlay|seeking|preload|mute|unmute|volumeBar|value|idPrefix|desired|NO_SOLUTION|VERSION|NO_SUPPORT|_html_load|_urlNotSetError|CSS_SELECTOR_COUNT|CSS_SELECTOR_METHOD|CSS_SELECTOR_STRING|OPTION_KEY|URL_NOT_SET|FLASH|not|in|your|Check|string|data|timeupdate|instances|navigator|swfPath|formatType|seekPercent|currentPercentRelative|createElement|append|param|_cssSelector|_updateVolume|_resetStatus|_getHtmlStatus|_validString|_warning|warningMsg|warningHint|the|progress|seeked|ended|volumechange|msie|exec|mp3|backgroundColor|cssSelectorAncestor|stop|bar|playBar|volumeBarValue|currentPercentAbsolute|instance|vorbis|cs|_limitValue|self|object|for|setTimeout|_updateMute|text|_seeking|switch|clearTimeout|_html_pause|load|_flash_load|playHead|found|_html_checkWaitForPlay|_flash_checkWaitForPlay|Flash|The|arguments|_init|new|bind|resize|suspend|waiting|playing|canplay|durationchange|convertTime|toLowerCase|script|needFlash|errorAlerts|empty|split|replace|attr|Jplayer|canPlayType|Number|shockwave|_addHtmlEventListeners|unbind|end|_getFlashStatus|_flash_setVideo|_flash_setAudio|setMedia|number|_flash_pause|_html_mute|_flash_mute|method|_html_initMedia|isNaN|plugins|_alert|or|be|to|and|slice|apply||destroy|loadstart|abort|emptied|stalled|loadedmetadata|loadeddata|canplaythrough|ratechange|htmlEvent|showHour|showMin|showSec|padHour|padMin|padSec|sepHour|sepMin|sepSec|uaMatch|webkit|indexOf|current|paused|_status|m4a|mp4|mp4a|ogg|wav|webm|m4v|push|_checkForFlash|macromedia|com|application|quality|high|FlashVars|allowScriptAccess|always|bgcolor|window|_volumeFix|bg|clearMedia|_html_setVideo|_html_setAudio|_html_clearMedia|_flash_clearMedia|NaN|_html_play|_flash_play|_html_playHead|_flash_playHead|_html_volume|_flash_volume|offset|pageX|left|_setOptions|_setOption|_resizeHtml|_resizeFlash|auto|ActiveXObject|ShockwaveFlash|Shockwave|nContext|can|set|valid|given|selector|fn|Array|call|null|concat|charAt|_|isFunction|remove|jPlayer_ready|jPlayer_resize|jPlayer_error|jPlayer_warning|jPlayer_loadstart|jPlayer_progress|jPlayer_suspend|jPlayer_abort|jPlayer_emptied|jPlayer_stalled|jPlayer_play|jPlayer_pause|jPlayer_loadedmetadata|jPlayer_loadeddata|jPlayer_waiting|jPlayer_playing|jPlayer_canplay|jPlayer_canplaythrough|jPlayer_seeking|jPlayer_seeked|jPlayer_timeupdate|jPlayer_ended|jPlayer_ratechange|jPlayer_durationchange|jPlayer_volumechange|Date|1E3|getUTCHours|getUTCMinutes|getUTCSeconds|opera|mozilla|rv|compatible|userAgent|unknown|js|metadata|jp_interface_1|seek|time|warningAlerts|mpeg|oga|webma|avc1|42E01E|ogv|theora|webmv|vp8|background|color|jp_|_jplayer_|_audio_|_video_|_flash_|_poster_|img|onload|escape|vol|classid|clsid|d27cdb6e|ae6d|11cf|96b8|444553540000|codebase|substring|fpdownload|pub|cabs|swflash|cab|movie|appendChild|embed|pluginspage|http|www|go|getflashplayer|removeData|enable|disable|Event|trigger|jPlayerFlashEvent|default|addClass|removeClass|pauseOthers|0010|Math|random|_cssSelectorAncestor|click|blur|_resizePoster|none|throw|fl_setAudio_m4a|fl_setAudio_mp3|fl_setVideo_m4v|fl_clearMedia|fl_load|fl_play|fl_pause|fl_play_head|fl_volume|fl_mute|mimeTypes|description|Error|Warning|alert|e_flash|e_no_solution|e_no_support|e_url|e_url_not_set|e_version|fallback|configured|correctly|command|was|issued|before|Ready|Details|No|by|Neither|HTML|nor|It|possible|any|provided|on|using|Media|could|loaded|Attempt|issue|playback|commands|while|no|url|needs|but|that|there|Review|Video|defined|are|missing|Use|Update|files|e_css_selector_count|e_css_selector_method|e_css_selector_string|e_option_key|of|methodCssSelectors|did|equal|one|methodName|methodCssSelector|String|requested|undefined|ancestor|jQuery'.split('|'),0,{}))



/* Theme Scripts */
jQuery(document).ready(function(){
	jQuery('blockquote').each(function(i){
		jQuery(this).wrap('<div class="blockquote_container" />');
		jQuery(this).before('<span class="blockquote_img quotation" />');
		jQuery(this).parent().find('.blockquote_img').html('&ldquo;');
	});	// Blockquote
	
	if (jQuery('code').length > 0){ 
		jQuery('code').each(function(i){ 
			jQuery(this).html(jQuery(this).html().replace(/{/g, '[').replace(/}/g, ']')); 
		}); 
	} //Code

	jQuery('.search input:text').each(function(i){
		jQuery(this).focus(function(){
			if (jQuery(this).val() == 'Search...'){
				jQuery(this).val('');
			}
		});
		jQuery(this).blur(function(){
			if (jQuery(this).val() == '' || jQuery(this).val() == ' '){
				jQuery(this).val('Search...');
			}
		});
	}); //Search
	
	jQuery('#contactwidget input#wname').each(function(i){
		jQuery(this).focus(function(){
			if (jQuery(this).val() == 'Name'){
				jQuery(this).val('');
			}
		});
		jQuery(this).blur(function(){
			if (jQuery(this).val() == '' || jQuery(this).val() == ' '){
				jQuery(this).val('Name');
			}
		});
	}); //Contact Widget Name
	
	jQuery('#contactwidget input#wemail').each(function(i){
		jQuery(this).focus(function(){
			if (jQuery(this).val() == 'Email'){
				jQuery(this).val('');
			}
		});
		jQuery(this).blur(function(){
			if (jQuery(this).val() == '' || jQuery(this).val() == ' '){
				jQuery(this).val('Email');
			}
		});
	}); //Contact Widget Email
	
	jQuery('#contactwidget textarea#wmessage').each(function(i){
		jQuery(this).focus(function(){
			if (jQuery(this).val() == 'Quick Message'){
				jQuery(this).val('');
			}
		});
		jQuery(this).blur(function(){
			if (jQuery(this).val() == '' || jQuery(this).val() == ' '){
				jQuery(this).val('Quick Message');
			}
		});
	}); //Contact Widget Message
	jQuery('#middle .post:last').css({background:'none', margin:0}); //Last Post Fixes
	if (jQuery('#middle .related_posts').next().attr('id') != 'comments'){
		jQuery('#middle .related_posts').css({background:'none'});
	} //Last Post Fixes
});



/* Lightbox Image Hover */
jQuery(document).ready(function(){
	jQuery('img').not('.noimgbg').each(function(i){
		if ( jQuery(this).parent().attr('rel') != '' && jQuery(this).parent().attr('rel') != undefined ){
			jQuery(this).parent().addClass('hov');
			$imgw = jQuery(this).width();
			$imgh = jQuery(this).height();
			jQuery(this).parent().append('<span class="image_link_hover" />');
			var $hovs = jQuery(this).parent().find('span.image_link_hover');
			$hovs.css({width: $imgw, height: $imgh, opacity: 0});
			jQuery(this).parent().hover(
				function(){
					$hovs.stop().animate({ opacity: '0.3' }, 500);
				}, function(){
					$hovs.stop().animate({ opacity: '0' }, 500);
				}
			);
		}
	});
});



/* Images Shadow */
/* jQuery(document).ready(function() {
	jQuery('img.image_generate_shadow').each(function(i){
		if (jQuery(this).parent().parent().parent().hasClass('portfolio')){
			$imgwidth = jQuery(this).outerWidth();
			jQuery(this).wrap('<span class="image_shadow_container" />');
			if (jQuery(this).hasClass('alignleft')){
				jQuery(this).removeClass('alignleft');
				jQuery(this).parent().addClass('alignleft');
			}
			if (jQuery(this).hasClass('alignright')){
				jQuery(this).removeClass('alignright');
				jQuery(this).parent().addClass('alignright');
			}
			jQuery(this).after('<img src="images/image_shadow.png" alt="" class="noimgbg" width="' + $imgwidth + '" />');
		} else {
			if (jQuery.browser.msie || jQuery.browser.mozilla || jQuery.browser.opera){
				$imgwidth = jQuery(this).outerWidth();
				jQuery(this).wrap('<span class="image_shadow_container" />');
				if (jQuery(this).hasClass('alignleft')){
					jQuery(this).removeClass('alignleft');
					jQuery(this).parent().addClass('alignleft');
				}
				if (jQuery(this).hasClass('alignright')){
					jQuery(this).removeClass('alignright');
					jQuery(this).parent().addClass('alignright');
				}
				jQuery(this).after('<img src="images/image_shadow.png" alt="" class="noimgbg" width="' + $imgwidth + '" />');
				if (jQuery(this).hasClass('caption')){
					$imgtext = jQuery(this).attr('alt');
					if ($imgtext != ''){
						jQuery(this).wrap('<span class="image_caption_container" />');
						jQuery(this).after('<span class="image_caption" />');
						jQuery(this).next().text($imgtext);
					}
				}
			} else {
				jQuery(this).load(function(){
					$imgwidth = jQuery(this).outerWidth();
					jQuery(this).wrap('<span class="image_shadow_container" />');
					if (jQuery(this).hasClass('alignleft')){
						jQuery(this).removeClass('alignleft');
						jQuery(this).parent().addClass('alignleft');
					}
					if (jQuery(this).hasClass('alignright')){
						jQuery(this).removeClass('alignright');
						jQuery(this).parent().addClass('alignright');
					}
					jQuery(this).after('<img src="images/image_shadow.png" alt="" class="noimgbg" width="' + $imgwidth + '" />');
					if (jQuery(this).hasClass('caption')){
						$imgtext = jQuery(this).attr('alt');
						if ($imgtext != ''){
							jQuery(this).wrap('<span class="image_caption_container" />');
							jQuery(this).after('<span class="image_caption" />');
							jQuery(this).next().text($imgtext);
						}
					}
				});
			}
		}
	});
});
 */



/* Flickr Lightbox */
jQuery(document).ready(function() {
	jQuery('#flickr .flickr_badge_image a, .cmsmasters_flickr_widget .flickr_badge_image a').each(function(i){
		var src = jQuery(this).find('img').attr('src');
		var title = jQuery(this).find('img').attr('title');
		var src2 = src.replace(/_s.jpg/g, '.jpg');
		jQuery(this).removeAttr('href');
		jQuery(this).attr({
			href: src2,
			title: title,
			rel: 'prettyPhoto[flickr_gal]'
		});
	});
});



/* Scroll Top */
jQuery(document).ready(function(){
	jQuery('.divider a').click(function(){
		jQuery('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
});



/* Toggle */
jQuery(document).ready(function(){
	jQuery('.togg a.tog').click(function(i){
		var dropDown = jQuery(this).parent().find('.tab_content');
		jQuery(this).parent().find('.tab_content').not(dropDown).slideUp();
		if (jQuery(this).hasClass('current')){
			jQuery(this).removeClass('current');
		} else { 
			jQuery(this).addClass('current');
		}
		dropDown.stop(false,true).slideToggle().css({display:'block'});
		i.preventDefault();
	})
});



/* Accordion */
jQuery(document).ready(function(){
	jQuery('.accordion a.tog').click(function(i){
		if (jQuery(this).hasClass('current')){ 
			jQuery(this).removeClass('current');
		} else { 
			jQuery(this).parent().parent().find('.tog').removeClass('current');
			jQuery(this).addClass('current');
		}
		var dropDown = jQuery(this).parent().find('.tab_content');
		jQuery(this).parent().parent().find('.tab_content').not(dropDown).slideUp();
		dropDown.stop(false,true).slideToggle().css({display:'block'});
		i.preventDefault();
	})
});



/* Tabs */
jQuery(document).ready(function(){
	jQuery('.tab ul.tabs li:first-child a').addClass('current');
	jQuery('.tab .tab_content div.tabs_tab:first-child').show();
	jQuery('.tab ul.tabs li a').click(function(e){
		$tab = jQuery(this).parent().parent().parent();
		$tab.find('ul.tabs').find('a').removeClass('current');
		jQuery(this).addClass('current');
		var $index = jQuery(this).parent().index();
		$tab.find('.tab_content').find('div.tabs_tab').not('div.tabs_tab:eq('+$index+')').slideUp();
		$tab.find('.tab_content').find('div.tabs_tab:eq('+$index+')').slideDown();
		e.preventDefault();
	})
});



/* Tour */
jQuery(document).ready(function(){
	jQuery('.tour_content ul.tour li:first-child').addClass('current');
	jQuery('.tour_content div.tour_box:first').show();
	jQuery('.tour_content ul.tour li a').click(function(e){
		$tour = jQuery(this).parent().parent().parent().parent();
		$tour.find('ul.tour').find('li').removeClass('current');
		jQuery(this).parent().addClass('current');
		var $index = jQuery(this).parent().index();
		$tour.find('div.tour_box').not('div.tour_box:eq('+$index+')').slideUp();
		$tour.find('div.tour_box:eq('+$index+')').slideDown();
		e.preventDefault();
	})
});



/* Popular and Latest Posts */
jQuery(document).ready(function(){
	jQuery('.related_posts ul li a').click(function(e){
		$rposts = jQuery(this).parent().parent().parent();
		$rposts.find('ul').find('a').removeClass('current');
		jQuery(this).addClass('current');
		var $index = jQuery(this).parent().index();
		$rposts.find('div.related_posts_content').not('div.related_posts_content:eq('+$index+')').slideUp();
		$rposts.find('div.related_posts_content:eq('+$index+')').slideDown();
		e.preventDefault();
	})
});



/* Image Preloader  */
jQuery(function(){
	var $imgContainerClass = '.portfolio .post';
	var $images = jQuery($imgContainerClass+' a img.image_shadow');
	var $max = $images.length;
	jQuery('.image_shadow_container a.preloader').each(function(){
		jQuery('<span class="image_shadow_container_img" />').prependTo(jQuery(this));
	});
	$images.remove();
	if ($max > 0){
		LoadImage(0, $max);
	}
	function LoadImage(index, $max){
		if (index < $max){
			jQuery('<span id="img'+(index+1)+'" class="p_img_container" />').each(function(){
				jQuery(this).prependTo(jQuery('.post .image_shadow_container a.preloader .image_shadow_container_img').eq(index));
			});
			var $img = new Image();
			var $curr = jQuery('#img'+(index+1));
			jQuery($img).load(function(){
				jQuery(this).css({display: 'none', opacity: 0});
				jQuery($curr).append(this);
				jQuery(this).css({display: 'block'}).animate({opacity: 1}, 300, function(){
					jQuery(this).parent().css({backgroundImage: 'none'});
					if (index == ($max-1)){
					} else {
						LoadImage(index+1, $max);
					}
				});
			}).error(function(){
				jQuery($curr).remove();
				LoadImage(index+1, $max);
			}).attr({
				src: jQuery($images[index]).attr('src'), 
				title: jQuery($images[index]).attr('title'), 
				alt: jQuery($images[index]).attr('alt')
			}).addClass(jQuery($images[index]).attr('class'));
		}
	}
});



/* Pretty Photo Lighbox */
jQuery(document).ready(function() {
	jQuery('a[rel^="prettyPhoto"]').prettyPhoto({ animationSpeed: 'normal', padding: 20, opacity: 0.65, showTitle: true, allowresize: true, counter_separator_label: ' / ', wmode: 'opaque', autoplay: 1, hideflash: false, modal: false });
});



/* Portfolio Filter */
jQuery(document).ready(function(){
	var newFilter = '', $p_item_width = 0, $p_item_all_count = 0, $p_item_count = 0, $p_item_number = 0, i = 0, j = 0, newFilterText = '';
	jQuery('ul.p_filter li:first-child').addClass('current');
	jQuery('.p_cat_filter').attr({name: jQuery('ul.p_filter li.current a').attr('name')});
	jQuery('ul.p_filter li a').click(function(){
		newFilter = jQuery(this).attr('name');
		newFilterText = jQuery(this).text();
		jQuery('.p_cat_filter').text(newFilterText).attr({name: newFilter});
		jQuery('.portfolio div.cl').each(function(i){
			jQuery(this).remove();
		});
		if (jQuery('.portfolio').hasClass('four_blocks')){
			$p_item_width = 210;
			$p_item_count = 4;
		} else {
			if (jQuery('.portfolio').hasClass('three_blocks')){
				$p_item_width = 290;
				$p_item_count = 3;
			} else {
				if (jQuery('.portfolio').hasClass('two_blocks')){
					$p_item_width = 450;
					$p_item_count = 2;
				} else {
					$p_item_width = 940;
					$p_item_count = 1;
				}
			}
		}
		jQuery('ul.p_filter li').removeClass('current').css('display', 'block');
		jQuery(this).parent().addClass('current');
		if (jQuery.browser.msie && jQuery.browser.version < 9){
			jQuery('.post').not('.'+newFilter).animate({width: 0, paddingRight: 0}, 500, function(){
				jQuery(this).css({display: 'none'});
			});
		} else {
			jQuery('.post').not('.'+newFilter).animate({width: 0, paddingRight: 0, opacity: 0}, 500, function(){
				jQuery(this).css({display: 'none'});
			});
		}
		jQuery('.post').not('.gallery').find('a').find('img').parent().parent().not(jQuery(this).attr({rel: 'prettyPhoto[portfolio]'})).attr({rel: 'prettyPhoto[portfolio]'});
		jQuery('.'+newFilter).not('.gallery').find('a').find('img').parent().parent().attr({rel: 'prettyPhoto[portfolio'+newFilter+']'});
		if (jQuery.browser.msie && jQuery.browser.version < 9){
			jQuery('.'+newFilter).animate({width: $p_item_width, paddingRight: '30px'}, 500, function(){
				jQuery(this).css({display: 'block'});
			});
		} else {
			jQuery('.'+newFilter).animate({width: $p_item_width, paddingRight: '30px', opacity: 1}, 500, function(){
				jQuery(this).css({display: 'block'});
			});
		}
		$p_item_all_count = jQuery('.'+newFilter).length;
		j = Math.floor($p_item_all_count/$p_item_count)+1;
		i = 1;
		while (i < j){
			$p_item_number = ($p_item_count * i) - 1;
			jQuery('.'+newFilter).eq($p_item_number).after('<div class="cl" />');
			i++
		}
		return false;
	});
	
	var $p_filter_height = '';
	jQuery('.p_filter_container').hover(function(){
		jQuery(this).find('.p_cat_filter').addClass('hover');
		$p_filter_height = jQuery(this).find('ul.p_filter li').length * 33;
		jQuery(this).find('ul.p_filter').stop().animate({height: $p_filter_height + 'px', paddingTop: '5px', paddingBottom: '5px'}, 250);
	}, function(){
		jQuery(this).find('ul.p_filter').stop().animate({height: 0, paddingTop: 0, paddingBottom: 0}, 250);
		jQuery(this).find('.p_cat_filter').removeClass('hover');
	});
	
	jQuery('.p_cat_filter').click(function(){
		return false;
	});
});



/* Portfolio Sort */
jQuery.fn.sort = (function(){
	var sort = [].sort;
	return function(comparator, getSortable){
		getSortable = getSortable || function(){return this;};
		var placements = this.map(function(){
			var sortElement = getSortable.call(this),
			parentNode = sortElement.parentNode,
			nextSibling = parentNode.insertBefore(
				document.createTextNode(''),
				sortElement.nextSibling
			);
			return function(){
				if (parentNode === this){
					throw new Error( "You can't sort elements if any one is a descendant of another." );
				}
				parentNode.insertBefore(this, nextSibling);
				parentNode.removeChild(nextSibling);
			};
		});
		return sort.call(this, comparator).each(function(i){
			placements[i].call(getSortable.call(this));
		});
	};
})();

jQuery(document).ready(function(){
	var $date = jQuery('.p_sort a[name="date"]'), $name = jQuery('.p_sort a[name="name"]'), $p_item = jQuery('.portfolio .post'), inverse = false;
	$name.click(function(){
		jQuery('.portfolio').fadeTo(100, 0.25, function(){
			$p_item.sort(function(a, b){
				a = jQuery(a).find('h4').text();
				b = jQuery(b).find('h4').text();
				return ( isNaN(a) || isNaN(b) ? a > b : +a > +b ) ? inverse ? -1 : 1 : inverse ? 1 : -1;
			});
			jQuery(this).fadeTo(300, 1);
		});
		$date.removeClass('sel').removeClass('sel2');
		if (jQuery(this).hasClass('sel')){
			jQuery(this).removeClass('sel').addClass('sel2');
		} else {
			jQuery(this).removeClass('sel2').addClass('sel');
		}
		inverse = !inverse;
		return false;
	});
	$date.click(function(){
		jQuery('.portfolio').fadeTo(100, 0.25, function(){
			$p_item.sort(function(a, b){
				a = jQuery(a).find('.p_date').text();
				b = jQuery(b).find('.p_date').text();
				return ( isNaN(a) || isNaN(b) ? a > b : +a > +b ) ? inverse ? -1 : 1 : inverse ? 1 : -1;
			});			
			jQuery(this).fadeTo(300, 1);
		});
		$name.removeClass('sel').removeClass('sel2');
		if (jQuery(this).hasClass('sel')){
			jQuery(this).removeClass('sel').addClass('sel2');
		} else {
			jQuery(this).removeClass('sel2').addClass('sel');
		}
		inverse = !inverse;
		return false;
	});
});



/* Portfolio Columns */
jQuery(document).ready(function(){
	jQuery('.switcher a').click(function(){
		jQuery('.switcher a').removeClass('current');
		jQuery(this).addClass('current');
		var $p_item_width = 0, $p_item_count = 0, $p_item_number = 0;
		var $column_number = jQuery(this).attr('name');
		jQuery('.portfolio').animate({opacity: 0}, 250, function(){
			jQuery(this).removeClass('one_block').removeClass('two_blocks').removeClass('three_blocks').removeClass('four_blocks').addClass($column_number);
			if (jQuery(this).hasClass('four_blocks')){
				$p_item_width = 210;
				$p_item_count = 4;
				jQuery(this).find('.post').css({paddingRight: '30px'});
			} else {
				if (jQuery(this).hasClass('three_blocks')){
					$p_item_width = 290;
					$p_item_count = 3;
					jQuery(this).find('.post').css({paddingRight: '30px'});
				} else {
					if (jQuery(this).hasClass('two_blocks')){
						$p_item_width = 450;
						$p_item_count = 2;
						jQuery(this).find('.post').css({paddingRight: '30px'});
					} else {
						$p_item_width = 940;
						$p_item_count = 1;
						jQuery(this).find('.post').css({paddingRight: 0});
					}
				}
			}
			jQuery(this).find('.post').each(function(){
				jQuery(this).css({width: $p_item_width});
			});
			jQuery(this).find('div.cl').each(function(){
				jQuery(this).remove();
			});
			var $p_item_all = jQuery('.p_cat_filter').attr('name');
			var $p_item_all_count = jQuery('.post.'+$p_item_all).length;
			var $imgh = jQuery('.post.'+$p_item_all+' a.hov').find('img').height();
			var $imgw = jQuery('.post.'+$p_item_all+' a.hov').find('img').width();
			jQuery('.post a.hov').find('span.image_link_hover').css({ width: $imgw, height: $imgh });
			jQuery('.post a.hov').find('span.image_shadow_container').css({ width: $imgw + 10 });
			jQuery('.post').find('span.image_shadow_container').find('img.noimgbg').css({ width: $imgw + 10 });
			var j = Math.floor($p_item_all_count/$p_item_count)+1;
			var i = 1;
			while (i < j){
				$p_item_number = ($p_item_count * i) - 1;
				jQuery('.'+$p_item_all).eq($p_item_number).after('<div class="cl" />');
				i++
			}
			jQuery(this).animate({opacity: 1}, 250);
		});
		return false;
	});
});



/* Form */
function submitform() {
    document.forms['commentform'].submit();
	return false;
};



/* Contact Form */
function checkemail(emailaddress){
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i); 
	return pattern.test(emailaddress); 
}

jQuery(document).ready(function(){ 
	jQuery('#contactform a#formsend').click(function(){ 
		var $name 	= jQuery('#name').val();
		var $email 	= jQuery('#email').val();
		var $subject = jQuery('#subject').val();
		var $url = jQuery('#url').val();
		var $message = jQuery('#message').val();
		var $contactwebsite = jQuery('#contactwebsite').val();
		var $contactemail = jQuery('#contactemail').val();
		var $contacturl = jQuery('#contacturl').val();
		if ($name != '' && $name.length < 3){ $nameshort = true; } else { $nameshort = false; }
		if ($name != '' && $name.length > 30){ $namelong = true; } else { $namelong = false; }
		if ($email != '' && checkemail($email)){ $emailerror = true; } else { $emailerror = false; }
		if ($subject != '' && $subject.length < 3){ $subjectshort = true; } else { $subjectshort = false; }
		if ($subject != '' && $subject.length > 100){ $subjectlong = true; } else { $subjectlong = false; }
		if ($url == ''){ $url = 'none'; }
		if ($message != '' && $message.length < 3){ $messageshort = true; } else { $messageshort = false; }
		jQuery('#contactform .loading').animate({opacity: 1}, 250);
		if ($name != '' && $nameshort != true && $namelong != true && $email != '' && $emailerror != false && $subject != '' && $subjectshort != true && $subjectlong != true && $message != '' && $messageshort != true && $contactwebsite != '' && $contactemail != '' && $contacturl != ''){ 
			jQuery.post($contacturl, 
				{contactwebsite: $contactwebsite, contactemail: $contactemail, name: $name, email: $email, subject: $subject, url: $url, message: $message}, 
				function(data){
					jQuery('#contactform .loading').animate({opacity: 0}, 250);
					jQuery('.entry div.contform').fadeOut('slow');
					jQuery('#name, #subject, #url, #email, #message').val('');
					jQuery('#contactform div.form_info div.form_error').hide();
					jQuery('.entry .box').hide();
					jQuery('.entry .info_box').fadeIn('fast');
					jQuery('html, body').animate({scrollTop:750}, 'slow');
					jQuery('.entry .info_box').delay(5000).fadeOut(1000, function(){ 
						jQuery('.entry div.contform').fadeIn('slow');
					});
				}
			);
			return false;
		} else {
			jQuery('#contactform .loading').animate({opacity: 0}, 250);
			jQuery('.entry .box').hide();
			jQuery('.entry .error_box').fadeIn('fast');
			jQuery('html, body').animate({scrollTop:750}, 'slow');
			jQuery('.entry .error_box').delay(5000).fadeOut('slow');
			if ($name == ''){ 
				jQuery('#name').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#name').parent().parent().parent().find('div.defaulterror').show(); 
			} else if ($nameshort == true){ 
				jQuery('#name').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#name').parent().parent().parent().find('div.shorterror').show(); 
			} else if ($namelong == true){ 
				jQuery('#name').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#name').parent().parent().parent().find('div.longerror').show(); 
			} else { 
				jQuery('#name').parent().parent().parent().find('div.form_error').hide();
			}
			if ($email == ''){ 
				jQuery('#email').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#email').parent().parent().parent().find('div.defaulterror').show(); 
			} else if ($emailerror == false){ 
				jQuery('#email').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#email').parent().parent().parent().find('div.invaliderror').show(); 
			} else { 
				jQuery('#email').parent().parent().parent().find('div.form_error').hide(); 
			}
			if ($subject == ''){ 
				jQuery('#subject').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#subject').parent().parent().parent().find('div.defaulterror').show(); 
			} else if ($subjectshort == true){ 
				jQuery('#subject').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#subject').parent().parent().parent().find('div.shorterror').show(); 
			} else if ($subjectlong == true){ 
				jQuery('#subject').parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#subject').parent().parent().parent().find('div.longerror').show(); 
			} else { 
				jQuery('#subject').parent().parent().parent().find('div.form_error').hide(); 
			}
			if ($message == ''){ 
				jQuery('#message').parent().parent().parent().parent().parent().find('div.form_error').hide(); 
				jQuery('#message').parent().parent().parent().parent().parent().find('div.defaulterror').show(); 
			} else if ($messageshort == true){ 
				jQuery('#message').parent().parent().parent().parent().parent().find('div.form_error').hide();
				jQuery('#message').parent().parent().parent().parent().parent().find('div.shorterror').show(); 
			} else { 
				jQuery('#message').parent().parent().parent().parent().parent().find('div.form_error').hide();
			}
			return false;
		}
	});
});

jQuery(document).ready(function(){ 
	jQuery('#contactwidget a#wformsend').click(function(){ 
		var $name 	= jQuery('#wname').val();
		var $email 	= jQuery('#wemail').val();
		var $message = jQuery('#wmessage').val();
		var $contactemail = jQuery('#wcontactemail').val();
		var $contacturl = jQuery('#wcontacturl').val();
		if ($name != '' && $name.length < 3){ $nameshort = true; } else { $nameshort = false; }
		if ($name != '' && $name.length > 30){ $namelong = true; } else { $namelong = false; }
		if ($email != '' && checkemail($email)){ $emailerror = true; } else { $emailerror = false; }
		if ($message != '' && $message.length < 3){ $messageshort = true; } else { $messageshort = false; }
		jQuery('#contactwidget .loading').animate({opacity: 1}, 250);
		if ($name != '' && $nameshort != true && $namelong != true && $email != '' && $emailerror != false && $message != '' && $messageshort != true && $contactemail != '' && $contacturl != ''){ 
			jQuery.post($contacturl, 
				{contactemail: $contactemail, name: $name, email: $email, message: $message}, 
				function(data){
					jQuery('#contactwidget .loading').animate({opacity: 0}, 250);
					jQuery('.form').fadeOut();
					jQuery('#bottom #wname, #bottom #wemail, #bottom #wmessage').css({'border-bottom':'0'});
					jQuery('.widgeterror').hide();
					jQuery('.widgetinfo').fadeIn('slow');
					jQuery('.widgetinfo').delay(5000).fadeOut(1000, function(){ 
						jQuery('#wname').val(jQuery('#wname').attr('alt'));
						jQuery('#wemail').val(jQuery('#wemail').attr('alt'));
						jQuery('#wmessage').val(jQuery('#wmessage').attr('title'));
						jQuery('.form').fadeIn('slow');
					});
				}
			);
			return false;
		} else {
			jQuery('#contactwidget .loading').animate({opacity: 0}, 250);
			jQuery('.widgeterror').hide();
			jQuery('.widgeterror').fadeIn('fast');
			jQuery('.widgeterror').delay(5000).fadeOut(1000);
			if ($name == '' || $nameshort == true || $namelong == true){ 
				jQuery('#wname').css({'border-bottom':'1px solid #dd2200'}); 
			} else { 
				jQuery('#bottom #wname').css({'border-bottom':'0'}); 
			}
			if ($email == '' || $emailerror == false){ 
				jQuery('#wemail').css({'border-bottom':'1px solid #dd2200'}); 
			} else { 
				jQuery('#bottom #wemail').css({'border-bottom':'0'}); 
			}
			if ($message == '' || $messageshort == true){ 
				jQuery('#wmessage').css({'border-bottom':'1px solid #dd2200'}); 
			} else { 
				jQuery('#bottom #wmessage').css({'border-bottom':'0'}); 
			}
			return false;
		}
	});
});



/* IE Fixes */
if (jQuery.browser.msie && jQuery.browser.version < 9){
	jQuery(document).ready(function(){
		jQuery('.widget_custom_comments_entries li:last-child').css('background','none'); //Comments Widget
		jQuery('.widget_custom_popular_entries li:last-child').css('background','none'); //Popular Posts Widget
		jQuery('.widget_custom_popular_news_entries li:last-child').css('background','none'); //Popular News Widget
		jQuery('#middle .post:last-child').css('background','none'); //Post
		jQuery('#middle.white_ver .post:last').css({background:'none', borderBottom:0}); //Post white ver
		jQuery('.map li:last-child').css({paddingLeft:'20px', paddingBottom:0}); //Map
		jQuery('.widget_links li:last-child').css('border','none'); //Widget Links
	});
};
